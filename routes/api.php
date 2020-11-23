<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//тесты
Route::get('/test_api', 'TestController@test_api'); //проверка работы api laravel

//HomePage
Route::get('/get_home_tracks_count', 'SpotifyAPIController@getHomePageUserTracksCount'); //получить кол-во треков в библиотеке
Route::get('/get_spotify_username', 'SpotifyAPIController@getSpotifyUsername'); //получить имя пользователя
Route::get('/get_site_info', 'HomeController@getSiteInfo'); //получить информацию о сайте

//Profile
Route::get('/get_spotify_profile', 'SpotifyAPIController@getSpotifyProfile'); //получить профиль пользователя
Route::get('/get_spotify_user_library', 'SpotifyAPIController@getSpotifyUserLibrary'); //получить библиотеку пользователя целиком
Route::get('/get_spotify_tracks', 'SpotifyAPIController@getSpotifyTracks'); //получить кол-во треков и последние пять
Route::get('/get_spotify_albums', 'SpotifyAPIController@getSpotifyAlbums'); //получить кол-во альбомов и последние пять
Route::get('/get_spotify_artists', 'SpotifyAPIController@getSpotifyArtists'); //получить кол-во подписок и случайные пять
Route::get('/get_user_library_time', 'SpotifyAPIController@getUserLibraryTime'); //посчитать время библиотеки
Route::get('/get_five_longest', 'SpotifyAPIController@getFiveLongestTracks'); //получить пять самых длинных треков

?>