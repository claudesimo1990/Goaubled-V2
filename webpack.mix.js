const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/sb-admin-2.scss', 'public/css/sb-admin.css')
    .sass('resources/sass/profile.scss', 'public/css')
    .sass('resources/sass/chat.scss', 'public/css/chat.css');
