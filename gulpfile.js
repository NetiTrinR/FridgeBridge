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
    mix
    .sass('app.scss')
    .styles([
        'bootstrap_chosen/bootstrap-chosen.css'
    ])
    .scripts([
        'chosen.jquery.js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'
    ])
    .version(['css/all.css', 'js/all.js']);
});
