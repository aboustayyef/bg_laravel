!function(t){function e(o){if(n[o])return n[o].exports;var u=n[o]={i:o,l:!1,exports:{}};return t[o].call(u.exports,u,u.exports,e),u.l=!0,u.exports}var n={};e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=61)}({15:function(t,e,n){n(5)},5:function(t,e){window.bg_menu={toggleButton:document.getElementsByClassName("nav-toggle")[0],navMenu:document.getElementsByClassName("nav-menu")[0],toggle:function(){this.toggleButton.classList.toggle("is-active"),this.navMenu.classList.toggle("is-active")},turnoff:function(){this.toggleButton.classList.remove("is-active"),this.navMenu.classList.remove("is-active")}},bg_menu.toggleButton.addEventListener("click",function(t){bg_menu.toggle()})},61:function(t,e,n){t.exports=n(15)}});