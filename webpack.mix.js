const mix = require("laravel-mix");

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

mix
    .js("resources/js/vendor.js", "public/assets/js")
    .js("resources/js/app.js", "public/assets/js")
    .sass("resources/sass/vendor.scss", "public/assets/css")
    .sass("resources/sass/app.scss", "public/assets/css")
    .options({
        processCssUrls: false,
        autoprefixer: {
            remove: false,
        },
        postCss: [
            require("autoprefixer")({
                overrideBrowserslist: ["last 40 versions"],
                grid: true,
            }),
        ],
    })
    .disableNotifications()
    .version()
    .sourceMaps();

mix.copyDirectory(
    "node_modules/@fortawesome/fontawesome-free/webfonts",
    "public/assets/webfonts"
);