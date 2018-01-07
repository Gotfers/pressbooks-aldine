<?php
/**
 * Aldine Helpers
 *
 * @package Aldine
 */

namespace Aldine\Helpers;

/**
 * Get catalog data.
 *
 * @param int $page
 * @param int $per_page
 * @param string $orderby
 * @param string $license
 * @param string $subject
 */
function get_catalog_data( $page = 1, $per_page = 10, $orderby = 'title', $license = '', $subject = '' ) {
	if ( defined( 'PB_PLUGIN_VERSION' ) ) {
			$request = new \WP_REST_Request( 'GET', '/pressbooks/v2/books' );
			$request->set_query_params([
				'page' => $page,
				'per_page' => $per_page,
			]);
			$response = rest_do_request( $request );
			$pages = $response->headers['X-WP-TotalPages'];
			$data = rest_get_server()->response_to_data( $response, true );
			$books = [];
		foreach ( $data as $key => $book ) {
			$book['title'] = $book['metadata']['name'];
			$book['date-published'] = ( isset( $book['metadata']['datePublished'] ) ) ?
				$book['metadata']['datePublished'] :
				'';
			$book['subject'] = ( isset( $book['metadata']['about'][0] ) )
				? $book['metadata']['about'][0]['identifier']
				: '';
			$books[] = $book;
		}
		if ( $orderby === 'latest' ) {
			$books = wp_list_sort( $books, $orderby, 'desc' );
		} else {
			$books = wp_list_sort( $books, $orderby );
		}
		return [ 'pages' => $pages, 'books' => $books ];
	} else {
		return [ 'pages' => 0, 'books' => [] ];
	}
}

/**
 * Get licenses for catalog display.
 *
 * @return array
 */
function get_catalog_licenses() {
	if ( defined( 'PB_PLUGIN_VERSION' ) ) {
		$licenses = ( new \Pressbooks\Licensing() )->getSupportedTypes();
		foreach ( $licenses as $key => $value ) {
			$licenses[ $key ] = preg_replace( '/\([^)]+\)/', '', $value['desc'] );
		}
		return $licenses;
	}
	return [];
}

/**
 *
 * Handler for contact form submissions.
 *
 * @return false | array
 */
function handle_contact_form_submission() {
	if ( ! isset( $_POST['pb_root_contact_form_nonce'] ) || ! wp_verify_nonce( $_POST['pb_root_contact_form_nonce'], 'pb_root_contact_form' ) ) {
		return; // Security check failed.
	}
	if ( isset( $_POST['submitted'] ) ) {
		$output = [];
		$name = ( isset( $_POST['visitor_name'] ) ) ? $_POST['visitor_name'] : '';
		$email = ( isset( $_POST['visitor_email'] ) ) ? $_POST['visitor_email'] : '';
		$institution = ( isset( $_POST['visitor_institution'] ) ) ? $_POST['visitor_institution'] : '';
		$message = ( isset( $_POST['message'] ) ) ? $_POST['message'] : '';
		$output['values'] = [
			'visitor_name' => esc_attr( $name ),
			'visitor_email' => sanitize_email( $email ),
			'visitor_institution' => esc_attr( $institution ),
			'message' => esc_textarea( $message ),
		];
		if ( empty( $name ) ) {
			$output['message'] = __( 'Name is required.', 'pressbooks-aldine' );
			$output['status'] = 'error';
			$output['field'] = 'visitor_name';
		} elseif ( empty( $email ) ) {
			$output['message'] = __( 'Email is required.', 'pressbooks-aldine' );
			$output['status'] = 'error';
			$output['field'] = 'visitor_email';
		} elseif ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$output['message'] = __( 'Email is invalid.', 'pressbooks-aldine' );
			$output['status'] = 'error';
			$output['field'] = 'visitor_email';
		} elseif ( empty( $institution ) ) {
			$output['message'] = __( 'Institution is required.', 'pressbooks-aldine' );
			$output['status'] = 'error';
			$output['field'] = 'visitor_institution';
		} elseif ( empty( $message ) ) {
			$output['message'] = __( 'Message is required.', 'pressbooks-aldine' );
			$output['status'] = 'error';
			$output['field'] = 'message';
		} else {
			$sent = wp_mail(
				get_option( 'admin_email' ),
				sprintf( __( 'Contact Form Submission from %s', 'pressbooks-aldine' ), $name ),
				sprintf(
					"From: %1\$s <%2\$s>\nInstitution: %3\$s\n\n%4\$s",
					stripslashes( $name ),
					$email,
					stripslashes( $institution ),
					strip_tags( $message )
				),
				"From: ${email}\r\nReply-To: ${email}\r\n"
			);
			if ( $sent ) {
				$output['message'] = __( 'Your message was sent!', 'pressbooks-aldine' );
				$output['status'] = 'success';
			} else {
				$output['message'] = __( 'Your message could not be sent.', 'pressbooks-aldine' );
				$output['status'] = 'error';
			}
		}
		return $output;
	}
	return;
}

function has_blocks( $post_id ) {
	$post_content = get_post_field( 'post_content', $post_id );
	if ( ! empty( $post_content ) ) {
		if ( strpos( $post_content, 'block--standard' ) || strpos( $post_content, 'block--alternate' ) ) {
			return true;
		} else {
			return false;
		}
	}

	return false;
}
