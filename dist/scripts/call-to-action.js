!function(t){var n={};function e(l){if(n[l])return n[l].exports;var o=n[l]={i:l,l:!1,exports:{}};return t[l].call(o.exports,o,o.exports,e),o.l=!0,o.exports}e.m=t,e.c=n,e.d=function(t,n,l){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:l})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var l=Object.create(null);if(e.r(l),Object.defineProperty(l,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)e.d(l,o,function(n){return t[n]}.bind(null,o));return l},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="/",e(e.s=1)}({1:function(t,n,e){t.exports=e("2+Yl")},"2+Yl":function(t,n){tinymce.create("tinymce.plugins.aldine_call_to_action",{init:function(t,n){t.addButton("aldine_call_to_action",{title:aldine.call_to_action.title,icon:"icon dashicons-flag",onclick:function(){t.windowManager.open({title:aldine.call_to_action.title,body:[{type:"textbox",name:"text",label:aldine.call_to_action.text,value:aldine.call_to_action.title},{type:"textbox",name:"link",label:aldine.call_to_action.link,value:"#"}],onsubmit:function(n){t.insertContent('[aldine_call_to_action text="'+n.data.text+'" link="'+n.data.link+'"]')}})}})},createControl:function(t,n){return null}}),tinymce.PluginManager.add("aldine_call_to_action",tinymce.plugins.aldine_call_to_action)}});