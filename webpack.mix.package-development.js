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
            'resources/assets/js',
            'packages/dfox288'
        ],
        extensions: [".webpack.js", ".web.js", ".js", ".json", ".less"]
    }
});

mix
    .js('resources/assets/js/project.package-development.js', 'public/js/motor-backend.js')

    .js('packages/dfox288/partymeister-frontend/resources/assets/js/partymeister-livevoting/main.js', 'public/js/partymeister-livevoting.js')
    .js('packages/dfox288/partymeister-slides/resources/assets/js/partymeister-slidemeister-web/main.js', 'public/js/partymeister-slidemeister-web.js')
    .js('packages/dfox288/partymeister-frontend/resources/assets/js/partymeister-frontend/main.js', 'public/js/partymeister-frontend.js')
    .js('packages/dfox288/partymeister-slides/resources/assets/js/partymeister-slides/partymeister-slides-frontend.js', 'public/js/partymeister-slides-frontend.js')
    .js('packages/dfox288/partymeister-accounting/resources/assets/js/partymeister-accounting-pos.js', 'public/js/partymeister-accounting-pos.js')
    .sourceMaps()
    .sass('resources/assets/sass/project.package-development.scss', 'public/css/motor-backend.css')
    .sass('packages/dfox288/partymeister-frontend/resources/assets/sass/partymeister-livevoting.scss', 'public/css')
    .sass('packages/dfox288/partymeister-accounting/resources/assets/sass/partymeister-accounting-pos.scss', 'public/css')
    .sass('packages/dfox288/partymeister-slides/resources/assets/sass/partymeister-slidemeister-web.scss', 'public/css')
    .sass('resources/assets/sass/partymeister-frontend.scss', 'public/css/motor-frontend.css')
    // APP RESOURCES
    .copy('resources/fonts/*.*', 'public/fonts')
    .copy('resources/assets/images/*.*', 'public/images')
;
if (mix.config.inProduction) {
    mix.version();
}
