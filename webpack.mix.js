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

const MaintenanceResAsset = 'resources/assets/maintenance/';
const MaintenancePubAsset = 'public/maintenance/';


mix.copy(MaintenanceResAsset + 'assets/', MaintenancePubAsset + 'assets/');

mix.copy(AdminResAsset + 'assets/', AdminPubAsset + 'assets/');
mix.copy(AdminResAsset + 'image/', AdminPubAsset + 'image/');

// Frontend js ve css mixleme
mix.combine([
    AdminResAsset + 'assets/custom.js'
], AdminPubAsset + 'assets/custom.js')
    /*.sass('sweetalert2/src/sweetalert2.scss', 'assets/mrturco.css')*/


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
mix.copy(FrendResAsset + 'css/style.css', FrendPubAsset + 'css/style.css');
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


/*
|--------------------------------------------------------------------------
| Porto Template Mix Asset Management
|--------------------------------------------------------------------------
*/
const PortoResAsset = 'resources/assets/porto/';
const PortoPubAsset = 'public/porto/';

/*
 |--------------------------------------------------------------------------
 | Copy Fonts and Other Files
 |--------------------------------------------------------------------------
 */
mix.copy(PortoResAsset + 'ajax/', PortoPubAsset + 'ajax/');
mix.copy(PortoResAsset + 'master/', PortoPubAsset + 'master/');
mix.copy(PortoResAsset + 'php/', PortoPubAsset + 'php/');
mix.copy(PortoResAsset + 'vendor/', PortoPubAsset + 'vendor/');
mix.copy(PortoResAsset + 'img/', PortoPubAsset + 'img/');
mix.copy(PortoResAsset + 'css/demos/', PortoPubAsset + 'css/demos/');
mix.copy(PortoResAsset + 'css/examples/', PortoPubAsset + 'css/examples/');
mix.copy(PortoResAsset + 'css/fonts/', PortoPubAsset + 'css/fonts/');
mix.copy(PortoResAsset + 'css/skins/', PortoPubAsset + 'css/skins/');
mix.copy(PortoResAsset + 'js/demos/', PortoPubAsset + 'js/demos/');
mix.copy(PortoResAsset + 'js/examples/', PortoPubAsset + 'js/examples/');
mix.copy(PortoResAsset + 'js/views/', PortoPubAsset + 'js/views/');
mix.copy(PortoResAsset + 'js/custom.js', PortoPubAsset + 'js/custom.js');
mix.copy(PortoResAsset + 'js/theme.init.js', PortoPubAsset + 'js/theme.init.js');
mix.copy(PortoResAsset + 'js/theme.js', PortoPubAsset + 'js/theme.js');

/*
 |--------------------------------------------------------------------------
 | Copy CSS Files
 |--------------------------------------------------------------------------
 */

/*
 |--------------------------------------------------------------------------
 | Copy JS Files
 |--------------------------------------------------------------------------
 */



/*
 |--------------------------------------------------------------------------
 | Mix Css and Js Files
 |--------------------------------------------------------------------------
 */
    // Frontend js ve css mixleme

    mix.styles([
        PortoResAsset + 'css/custom.css',
        PortoResAsset + 'css/theme.css',
        PortoResAsset + 'css/theme-blog.css',
        PortoResAsset + 'css/theme-elements.css',
        PortoResAsset + 'css/theme-shop.css',
    ], PortoPubAsset + 'css/mrturco.css')


    .sourceMaps();
mix.version()

