<?php
$router->group(['middleware' => 'auth'], function() {
    $this->pattern('id', '[0-9]+');

    $this->resource('admin/', 'App\Http\Controllers\Admin\DashboardController');

    $this->get('admin/language/data', 'App\Http\Controllers\Admin\LanguageController@data');
    $this->resource('admin/language/', 'App\Http\Controllers\Admin\LanguageController');

    $this->get('admin/news/data', 'App\Http\Controllers\Admin\NewsController@data');
    $this->resource('admin/news/', 'App\Http\Controllers\Admin\NewsController');

    $this->get('admin/newscategory/data', 'App\Http\Controllers\Admin\NewsCategoryController@data');
    $this->resource('admin/newscategory/', 'App\Http\Controllers\Admin\NewsCategoryController');

	$this->get('admin/photo/data', 'App\Http\Controllers\Admin\PhotoController@data');
    $this->resource('admin/photo/', 'App\Http\Controllers\Admin\PhotoController');

    $this->get('admin/photoalbum/data', 'App\Http\Controllers\Admin\PhotoAlbumController@data');
    $this->resource('admin/photoalbum/', 'App\Http\Controllers\Admin\PhotoAlbumController');

    $this->get('admin/videoalbum/data', 'App\Http\Controllers\Admin\VideoAlbumController@data');
    $this->resource('admin/videoalbum/', 'App\Http\Controllers\Admin\VideoAlbumController');

    $this->get('admin/video/data', 'App\Http\Controllers\Admin\VideoController@data');
    $this->resource('admin/video/', 'App\Http\Controllers\Admin\VideoController');

    $this->get('admin/users/data', 'App\Http\Controllers\Admin\UserController@data');
    $this->resource('admin/users/', 'App\Http\Controllers\Admin\UserController');

    $this->get('admin/roles/data', 'App\Http\Controllers\Admin\RoleController@data');
    $this->resource('admin/roles/', 'App\Http\Controllers\Admin\RoleController');
});
