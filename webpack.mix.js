const mix = require("laravel-mix");

mix.js("resources/js/bard.js", "dist/js/span-classes.js")
    .vue({version: 2})
    .webpackConfig(require('./webpack.config'))

mix.copy('resources/css', 'dist/css');
