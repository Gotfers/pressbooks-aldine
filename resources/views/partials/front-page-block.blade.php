<div class="block flex flex-column items-center justify-center p-0 w-100">
  <div class="inside tc">
    <h3 class="tc ttu primary">{{ $title }}</h3>
    {{ $slot }}
    <a class="button button-primary" href="{{ $button_url }}">{{ $button_title }}</a>
  </div>
</div>
