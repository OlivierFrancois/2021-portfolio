let mix = require("laravel-mix");

mix.js("src/js/index.js", "dist/js/app.js");
mix.sass("src/scss/main.scss", "dist/css/app.css");