const mix = require('laravel-mix');

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


/*
 |--------------------------------------------------------------------------
 | Admin Mix Asset Management
 |--------------------------------------------------------------------------
 */
const AdminResAsset = 'resources/assets/admin/';
const AdminPubAsset = 'public/admin/';


mix.copy(AdminResAsset + 'assets/', AdminPubAsset + 'assets/');
mix.copy(AdminResAsset + 'image/', AdminPubAsset + 'image/');

// Frontend js ve css mixleme
mix.combine([
    AdminResAsset + 'assets/custom.js'
], AdminPubAsset + 'assets/custom.js')
    .sass('sweetalert2/src/sweetalert2.scss', 'assets/mrturco.css')


/*
 |--------------------------------------------------------------------------
 | Frontend Mix Asset Management
 |--------------------------------------------------------------------------
 */
const FrendResAsset = 'resources/assets/frontend/';
const FrendPubAsset = 'public/frontend/';

/*
 |--------------------------------------------------------------------------
 | Copy Fonts and Img
 |--------------------------------------------------------------------------
 */
mix.copy(FrendResAsset + 'fonts/', FrendPubAsset + 'fonts/');
mix.copy(FrendResAsset + 'img/', FrendPubAsset + 'img/');
mix.copy(FrendResAsset + 'css/ekko-lightbox.css', FrendPubAsset + 'css/ekko-lightbox.css');

/*
 |--------------------------------------------------------------------------
 | Copy CSS Files
 |--------------------------------------------------------------------------
 */

mix.copy(FrendResAsset + 'css/bootstrap.css', FrendPubAsset + 'css/bootstrap.css');
mix.copy(FrendResAsset + 'css/socicon.css', FrendPubAsset + 'css/socicon.css');
mix.copy(FrendResAsset + 'css/iconsmind.css', FrendPubAsset + 'css/iconsmind.css');
mix.copy(FrendResAsset + 'css/interface-icons.css', FrendPubAsset + 'css/interface-icons.css');
mix.copy(FrendResAsset + 'css/owl.carousel.css', FrendPubAsset + 'css/owl.carousel.css');
mix.copy(FrendResAsset + 'css/lightbox.min.css', FrendPubAsset + 'css/lightbox.min.css');
mix.copy(FrendResAsset + 'css/theme5661.css', FrendPubAsset + 'css/theme5661.css');
/*
 |--------------------------------------------------------------------------
 | Copy JS Files
 |--------------------------------------------------------------------------
 */
mix.copy(FrendResAsset + 'js/ekko-lightbox.js', FrendPubAsset + 'js/ekko-lightbox.js');


/*
 |--------------------------------------------------------------------------
 | Mix Css and Js Files
 |--------------------------------------------------------------------------
 */
mix.js('resources/js/app.js', 'frontend/js')
    // Frontend js ve css mixleme
    .combine([
        FrendResAsset + 'js/jquery-2.1.4.min.js',
        FrendResAsset + 'js/isotope.min.js',
        FrendResAsset + 'js/ytplayer.min.js',
        FrendResAsset + 'js/easypiechart.min.js',
        FrendResAsset + 'js/owl.carousel.min.js',
        FrendResAsset + 'js/lightbox.min.js',
        FrendResAsset + 'js/twitterfetcher.min.js',
        FrendResAsset + 'js/smooth-scroll.min.js',
        FrendResAsset + 'js/scrollreveal.min.js',
        FrendResAsset + 'js/parallax.js',
        FrendResAsset + 'js/scripts.js',
        FrendResAsset + 'js/custom.js'
    ], FrendPubAsset + 'js/mrturco.js')
    .styles([
        FrendResAsset + 'css/custom.css'
    ], FrendPubAsset + 'css/mrturco.css')

    .sourceMaps();
mix.version()

