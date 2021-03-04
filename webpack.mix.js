let mix = require("laravel-mix");

mix.js("src/js/index.js", "public/js")
    .postCss("src/css/main.css", "public/css", [
        require("tailwindcss"),
    ]);