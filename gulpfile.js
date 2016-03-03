var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
           "jquery-1.12.0.min.js",
           "backstretch-min.js",
           "flickity.js",
           "menu.js",
           "pages.js",
           "modal.js",
           "lazyload.js",
       ]);
});