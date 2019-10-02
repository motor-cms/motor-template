const mix = require('laravel-mix');

mix.options({
    hmrOptions: {
        host: 'localhost',
        port: '8079'
    },
});

mix.webpackConfig({
    devServer: {
        port: '8079'
    },
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules',
            'vendor/tightenco',
            'vendor/motor-cms',
            'vendor/partymeister',
            'resources/assets/js',
            'packages/dfox288'
        ],
        extensions: [".webpack.js", ".web.js", ".js", ".json", ".less"]
    }
});

mix
    .js('resources/assets/js/project.default.js', 'public/js/motor-backend.js')
    .js('resources/assets/js/frontend.js', 'public/js/motor-frontend.js')
    .sourceMaps()
    .sass('resources/assets/sass/project.default.scss', 'public/css/motor-backend.css')
    .sass('resources/assets/sass/frontend.scss', 'public/css/motor-frontend.css')
    // APP RESOURCES
    .copy('resources/fonts/*.*', 'public/fonts')
    .copy('resources/assets/images/*.*', 'public/images')
;
if (mix.config.inProduction) {
    mix.version();
}
