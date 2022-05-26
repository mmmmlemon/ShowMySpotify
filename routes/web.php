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

//тесты
// Route::get('/test_custom', 'TestController@test_custom'); //пустая функция, в которую можно написать что угодно и проверить
// Route::get('/test_spotify', 'TestController@test_spotify'); //тест работы Spotify WEB Api
// Route::get('/test_auth', 'TestController@test_auth'); //тест Авторизации
// Route::get('/test_callback', 'TestController@test_auth_callback'); //callback для авторизации
// Route::get('/test_cookies', 'TestController@test_cookies'); //тест Cookies
// Route::get('/test_library', 'TestController@test_library'); //тест библиотеки пользователя



//авторизация и логаут - Админ, админка
// Auth::routes();
Route::group(['prefix' => 'superuser'], function(){ 
    Auth::routes(); 

    Route::group(['middleware' => ['auth', 'admin']], function(){
        Route::get('/control_panel', 'AdminController@viewControlPanel'); //показать админку
        Route::get('/control_panel/logo_and_images', 'AdminController@viewLogoAndImages'); //редактирование изображений
        Route::get('/control_panel/site_info', 'AdminController@viewSiteInfo'); //редактирование информации о сайте
        Route::get('/control_panel/faq', 'AdminController@viewFAQ'); //редактирование FAQ
        Route::get('/control_panel/contacts', 'AdminController@viewContacts'); //редактирование контактов

        Route::post('/control_panel/save_basic', 'AdminController@saveBasicSettings'); //сохранить общие настройки
        Route::post('/control_panel/save_logo_and_images', 'AdminController@saveLogoAndImages'); //сохранить лого и изображения
        Route::post('/control_panel/save_site_info', 'AdminController@saveSiteInfo'); //сохранить информацию о сайте
        Route::post('/control_panel/save_faq', 'AdminController@saveFAQ'); //сохранить FAQ
        Route::post('/control_panel/save_contacts', 'AdminController@saveContacts'); //сохранить контакты
    });
});

//авторизация и логаут - Spotify
// Route::get('/spotify_login', 'SpotifyAuthController@spotifyAuth'); //авторизация через spotify
// Route::get('/spotify_auth_callback', 'SpotifyAuthController@spotifyAuthCallback'); //callback для авторизации
// Route::get('/spotify_logout', 'SpotifyAuthController@spotifyLogout'); //выход из spotify

//token refresh
// Route::get('/refresh_token', 'SpotifyAuthController@refreshToken');

//вывод главной страницыы
Route::get('/{any}', 'HomeController@index')->where('any', '.*');



