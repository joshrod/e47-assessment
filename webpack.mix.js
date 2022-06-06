let mix = require('laravel-mix');

mix.js('src/js/scripts.js', 'assets/js/main.js')
    .sass('src/scss/style.scss', 'assets/css/style.css')
    .options({
        processCssUrls: false,
    });