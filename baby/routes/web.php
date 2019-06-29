<?php

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

Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Site View
|--------------------------------------------------------------------------

*/
Route::get('index', 'SiteController@index')->name('index');
Route::get('/', 'SiteController@index')->name('/');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/gallery', 'SiteController@gallery')->name('gallery');
Route::get('/products', 'SiteController@products')->name('products');
Route::get('/singleproduct/{id}', 'SiteController@singleproduct')->name('singleproduct');
Route::post('/send_mail_to', 'SiteController@send_email')->name('send_mail_to');




Route::get('/404',function(){
    return view('site.404');
    });
Route::group(['prefix' => 'admin'], function () {

    Route::get('/','HomeController@index');

    Route::group(['prefix' => 'categories'], function () {
    
        Route::get('add','CategoriesController@add')->name('categories.add');
        Route::post('save','CategoriesController@save')->name('categories.save');
        Route::get('edit/{id}','CategoriesController@edit')->name('categories.edit');
        Route::post('update/{id}','CategoriesController@update')->name('categories.update');
        Route::get('view','CategoriesController@view')->name('categories.view');
        Route::get('delete/{id}','CategoriesController@delete')->name('categories.delete');
    }); 

    
    Route::group(['prefix' => 'products'], function () {
    
        Route::get('add','ProductsController@add')->name('products.add');
        Route::post('save','ProductsController@save')->name('products.save');
        Route::get('edit/{id}','ProductsController@edit')->name('products.edit');
        Route::post('update/{id}','ProductsController@update')->name('products.update');
        Route::get('view','ProductsController@view')->name('products.view');
        Route::get('delete/{id}','ProductsController@delete')->name('products.delete');
    }); 

    Route::group(['prefix' => 'sliders'], function () {
    
        Route::get('add','SlidersController@add')->name('sliders.add');
        Route::post('save','SlidersController@save')->name('sliders.save');
        Route::get('edit/{id}','SlidersController@edit')->name('sliders.edit');
        Route::post('update/{id}','SlidersController@update')->name('sliders.update');
        Route::get('view','SlidersController@view')->name('sliders.view');
        Route::get('delete/{id}','SlidersController@delete')->name('sliders.delete');
    }); 

    Route::group(['prefix' => 'about'], function () {
    
        Route::get('add','AboutController@add')->name('about.add');
        Route::post('save','AboutController@save')->name('about.save');
        Route::get('edit/{id}','AboutController@edit')->name('about.edit');
        Route::post('update/{id}','AboutController@update')->name('about.update');
        Route::get('view','AboutController@view')->name('about.view');
        Route::get('delete/{id}','AboutController@delete')->name('about.delete');
    }); 

    Route::group(['prefix' => 'stuff'], function () {
    
        Route::get('add','StuffController@add')->name('stuff.add');
        Route::post('save','StuffController@save')->name('stuff.save');
        Route::get('edit/{id}','StuffController@edit')->name('stuff.edit');
        Route::post('update/{id}','StuffController@update')->name('stuff.update');
        Route::get('view','StuffController@view')->name('stuff.view');
        Route::get('delete/{id}','StuffController@delete')->name('stuff.delete');
    }); 

    Route::group(['prefix' => 'statistics'], function () {
    
        Route::get('add','StatisticsController@add')->name('statistics.add');
        Route::post('save','StatisticsController@save')->name('statistics.save');
        Route::get('edit/{id}','StatisticsController@edit')->name('statistics.edit');
        Route::post('update/{id}','StatisticsController@update')->name('statistics.update');
        Route::get('view','StatisticsController@view')->name('statistics.view');
        Route::get('delete/{id}','StatisticsController@delete')->name('statistics.delete');
    }); 
    
    Route::group(['prefix' => 'gallery'], function () {
    
        Route::get('add','GalleryController@add')->name('gallery.add');
        Route::post('save','GalleryController@save')->name('gallery.save');
        Route::get('edit/{id}','GalleryController@edit')->name('gallery.edit');
        Route::post('update/{id}','GalleryController@update')->name('gallery.update');
        Route::get('view','GalleryController@view')->name('gallery.view');
        Route::get('delete/{id}','GalleryController@delete')->name('gallery.delete');
    }); 
    
    Route::group(['prefix' => 'contact'], function () {
    
        Route::get('add','ContactController@add')->name('contact.add');
        Route::post('save','ContactController@save')->name('contact.save');
        Route::get('edit/{id}','ContactController@edit')->name('contact.edit');
        Route::post('update/{id}','ContactController@update')->name('contact.update');
        Route::get('view','ContactController@view')->name('contact.view');
        Route::get('delete/{id}','ContactController@delete')->name('contact.delete');
    }); 
    
    Route::group(['prefix' => 'settings'], function () {
    
        Route::get('add','SettingsController@add')->name('settings.add');
        Route::post('save','SettingsController@save')->name('settings.save');
        Route::get('edit/{id}','SettingsController@edit')->name('settings.edit');
        Route::post('update/{id}','SettingsController@update')->name('settings.update');
        Route::get('view','SettingsController@view')->name('settings.view');
        Route::get('delete/{id}','SettingsController@delete')->name('settings.delete');
    }); 

    
    


});

