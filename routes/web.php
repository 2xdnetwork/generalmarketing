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

Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('about', 'App\Http\Controllers\PageController@about');
Route::get('paid-advertising', 'App\Http\Controllers\PageController@paid_advertising');
Route::get('social-media-management', 'App\Http\Controllers\PageController@social_media_management');
Route::get('website-development', 'App\Http\Controllers\PageController@website_development');
Route::get('search-engine-optimization', 'App\Http\Controllers\PageController@search_engine_optimization');
Route::get('brand-strategy', 'App\Http\Controllers\PageController@brand_strategy');
Route::get('email-marketing', 'App\Http\Controllers\PageController@email_marketing');
Route::get('contact', 'App\Http\Controllers\PageController@contact');
Route::get('privacy-policy', 'App\Http\Controllers\PageController@privacy_policy');
Route::get('terms-and-conditions', 'App\Http\Controllers\PageController@terms_and_conditions');
Route::get('unsubscribe', 'App\Http\Controllers\PageController@unsubscribe');

Route::post('contact-form1', 'App\Http\Controllers\ContactFormController@submitContact');
Route::post('contact-form2', 'App\Http\Controllers\ContactFormController@submitFooterContact');
Route::post('contact-form3', 'App\Http\Controllers\ContactFormController@unsubscribe');

//Generate Sitemap:
Route::get('/sitemap.xml', 'App\Http\Controllers\PageController@sitemap');
Route::get('/sitemap', 'App\Http\Controllers\PageController@sitemap');
