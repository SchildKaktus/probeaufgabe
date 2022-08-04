const mix = require('laravel-mix');

mix.js('resources/js/app.js','public/js')
    .vue(3)
    .version()
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
      ]);