!function(e){var t={};function n(i){if(t[i])return t[i].exports;var a=t[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(i,a,function(t){return e[t]}.bind(null,a));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=4)}({4:function(e,t,n){e.exports=n("eeN9")},eeN9:function(e,t){tinymce.create("tinymce.plugins.aldine_page_section",{init:function(e,t){e.addButton("aldine_page_section",{title:aldine.page_section.title,icon:"icon dashicons-layout",onclick:function(){e.windowManager.open({title:aldine.page_section.title,body:[{type:"textbox",name:"title",label:aldine.page_section.title_label,value:aldine.page_section.title},{type:"listbox",name:"variant",label:"Variant",values:[{text:aldine.page_section.standard,value:""},{text:aldine.page_section.accent,value:"accent"},{text:aldine.page_section.bordered,value:"bordered"},{text:aldine.page_section.borderless,value:"borderless"}],value:""}],onsubmit:function(t){e.insertContent('[aldine_page_section title="'+t.data.title+'" variant="'+t.data.variant+'"]<p>Insert your page section content here.</p>[/aldine_page_section]')}})}})},createControl:function(e,t){return null}}),tinymce.PluginManager.add("aldine_page_section",tinymce.plugins.aldine_page_section)}});