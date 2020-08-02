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


use Illuminate\Support\Facades\Route;

/*============================
        ADMIN ROUTES
=============================*/

Route::group([
    'prefix' => 'admin/console'],
    function () {

        Route::get('/', 'Admin\AdminController@index')->name('admin.index');
        Route::get('/login', 'Admin\AdminController@login')->name('admin.login');
        Route::post('/login', 'Admin\AdminController@postLogin')->name('admin.login.post');
        Route::post('/logout', 'Admin\AdminController@logout')->name('admin.logout');

        Route::group([
            'middleware' => 'role:super_admin|admin'],
            function() {
                Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
                Route::get('/profile', 'Admin\AdminController@profileDetails')->name('admin.profile');

                //  ======== USERS ROUTE ===========
                Route::resource('/users', 'Admin\UserController')->names([
                    'index' => 'admin.users.index',
                    'create' => 'admin.users.create',
                    'show' => 'admin.users.show',
                    'edit' => 'admin.users.edit',
                    'update' => 'admin.users.update',
                    'store' => 'admin.users.store'
                ]);

                //  ======== INVENTORY ROUTE ===========
                Route::resource('/inventory', 'Admin\InventoryController')->names([
                    'index' => 'admin.inventory.index',
                    'create' => 'admin.inventory.create',
                    'show' => 'admin.inventory.show',
                    'edit' => 'admin.inventory.edit',
                    'update' => 'admin.inventory.update',
                    'store' => 'admin.inventory.store'
                ]);

            });
    });

// Single Page Application Route

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');



