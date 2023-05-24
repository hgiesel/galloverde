const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.postCss('resources/css/app.css', 'public/css')
  .tailwind();
