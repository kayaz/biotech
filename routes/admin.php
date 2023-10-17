<?php
use Illuminate\Support\Facades\Route;

//GET - admin/crm/module
//POST - admin/crm/module - store
//PUT - admin/crm/module/{calendar} - update
//GET - admin/crm/module/{calendar} - show
//DELETE - admin/crm/module/{calendar} - destroy
//GET - admin/crm/module/{calendar}/edit - edit

Route::group([
    'namespace' => 'Admin', 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'can:admin-panel']], function () {

    Route::get('/', function () {
        return redirect('admin/settings/seo');
    });

    Route::post('slider/set', 'Slider\IndexController@sort')->name('slider.sort');
    Route::post('gallery/set', 'Gallery\IndexController@sort')->name('gallery.sort');
    Route::post('image/set', 'Gallery\ImageController@sort')->name('image.sort');
    Route::post('box/set', 'Box\IndexController@sort')->name('box.sort');
    Route::get('ajaxGetGalleries', 'Gallery\IndexController@ajaxGetGalleries')->name('ajaxGetGalleries');

    Route::resources([
        'dictionary' => 'Dictionary\IndexController',
        'user' => 'User\IndexController',
        'role' => 'Role\IndexController',
        'greylist' => 'Greylist\IndexController',
        'article' => 'Article\IndexController',
        'page' => 'Page\IndexController',
        'url' => 'Url\IndexController',
        'file' => 'File\IndexController',
        'gallery' => 'Gallery\IndexController',
        'image' => 'Gallery\ImageController',
        'galleryVideo' => 'Gallery\VideoController',
        'slider' => 'Slider\IndexController',
        'box'=> 'Box\IndexController',
        'product'=> 'Product\IndexController'
    ]);

    Route::get('dictionary/{slug}/{locale}/edit', 'Dictionary\IndexController@edit')->name('dictionary.edit');

    Route::group(['namespace' => 'Client','prefix'=>'/clients', 'as' => 'clients.'], function () {

        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/datatable', 'IndexController@datatable')->name('datatable');
        Route::get('/create', 'IndexController@create')->name('create');
        Route::get('/{client}', 'IndexController@show')->name('show');

        Route::get('{client}/rodo', 'RodoController@show')->name('rodo');

        // Client chat
        Route::group(['prefix'=>'{client}/chat', 'as' => 'chat.'], function () {
            Route::get('/', 'ChatController@show')->name('show');
            Route::post('/form', 'ChatController@form')->name('form');
            Route::post('/mark', 'ChatController@mark')->name('mark');
            Route::post('/', 'ChatController@create')->name('create');
        });
    });

    // Settings
    Route::group(['prefix'=>'/settings', 'as' => 'settings.'], function () {

        Route::resources([
            '/' => 'Dashboard\IndexController',
            'social' => 'Dashboard\SocialController',
            'seo' => 'Dashboard\SeoController',
            'popup' => 'Dashboard\PopupController'
        ]);
    });

    // RODO
    Route::group(['prefix' => '/rodo', 'as' => 'rodo.'], function () {

        Route::resources([
            'rules' => 'Rodo\RulesController',
            'settings' => 'Rodo\SettingsController',
            'clients' => 'Rodo\ClientController'
        ]);
    });

    Route::get('logs', 'Log\IndexController@index')->name('log.index');
    Route::get('logs/datatable', 'Log\IndexController@datatable')->name('log.datatable');
});

Route::get('{uri}', 'Front\MenuController@index')->where('uri', '([A-Za-z0-9\-\/]+)');
