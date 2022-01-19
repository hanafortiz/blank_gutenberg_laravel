const mix = require("laravel-mix");
mix.js("resources/js/app.js", "dist/")
mix.sass("resources/scss/app.scss", "dist/")
mix.sass("resources/scss/editor-style.scss", "dist/");

mix.browserSync({
  proxy: "http://blank-wp.local/",
  files: ["./**/*.php", "./dist/**/*.*"],
});