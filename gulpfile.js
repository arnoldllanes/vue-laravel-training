var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');
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
    //mix.sass('app.scss');
    // mix.browserify('filter.main.js');
    // mix.browserify('events.app.js');
    // mix.browserify('main.js');
    // mix.browserify('async.main.js');
    // mix.browserify('animate.main.js');
    // mix.browserify('duplicate.main.js');
    // mix.browserify('view.main.js');
    mix.browserify('alert.main.js');
});
