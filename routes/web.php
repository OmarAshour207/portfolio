<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@HomePage');
Route::get('/about', 'HomeController@aboutPage');

Route::get('/contact-us', 'ContactController@index');
Route::post('/send/contact', 'ContactController@sendContact')->name('send.contact');

Route::get('/services', 'HomeController@servicesPage');
Route::get('/services/{id}/{title}', 'HomeController@singleService')->name('service.show');

Route::get('/projects', 'HomeController@projectsPage');

Route::get('/blogs', 'HomeController@blogsPage');
Route::get('/blogs/{id}/{title}', 'HomeController@showBlog')->name('blog.show');

Route::get('/lang/{language}', 'HomeController@changeLanguage');


// Admin ROUTES
Auth::routes(['register' => false]);

Route::get('lang/{lang}','LanguageController@changeLanguage')->name('admin.lang');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'] , function () {

    Route::get('dashboard', 'AdminController@showDashboard');

    Route::resource('slider', 'SliderController');

    Route::resource('services', 'ServiceController');

    Route::resource('projects', 'ProjectController');

    Route::resource('contacts', 'ContactController');

    Route::resource('about', 'AboutUsController');

    Route::resource('testimonials', 'TestimonialController');

    Route::resource('blogs', 'BlogController');

    Route::resource('team-members', 'TeamMemberController');

    Route::get('settings/contact-info', 'ContactInfoController@contactInfo')->name('settings.contact');
    Route::post('settings/contact-info', 'ContactInfoController@store')->name('settings.contact.store');

    Route::get('settings/seo', 'SeoController@showSeoPage')->name('settings.seo');
    Route::post('settings/seo', 'SeoController@store')->name('settings.seo.store');

    Route::resource('website-settings', 'SettingController');

    Route::resource('logos', 'LogoController');

    Route::post('upload/image', 'ImageController@uploadPhoto')->name('upload.image');
    Route::post('remove/image', 'ImageController@removePhoto')->name('remove.image');
});
