<?php

use Illuminate\Http\Request;


Route::namespace('Api')->name('api.')->group(function () {

    // Company
    Route::get('empresas/getAll', 'CompanyController@getAllCompany');
    Route::get('empresas/get/{companyId}', 'CompanyController@getCompany');
    Route::post('empresas/create', 'CompanyController@createCompany');
    Route::put('empresas/update/{companyId}', 'CompanyController@updateCompany');
    Route::delete('empresas/delete/{companyId}', 'CompanyController@deleteCompany');

    // Categories
    Route::get('categorias/getAll/{companyId}', 'CategoryController@getAllCategories');
    Route::get('categorias/get/{categoryId}', 'CategoryController@getCategories');
    Route::post('categorias/create', 'CategoryController@createCategories');
    Route::put('categorias/update/{categoryId}', 'CategoryController@updateCategories');
    Route::delete('categorias/delete/{categoryId}', 'CategoryController@deleteCategories');

    // Users
    Route::get('usuarios/getAll/{categoryId}', 'UserController@getAllUsers');
    Route::get('usuarios/get/{userId}', 'UserController@getUsers');
    Route::post('usuarios/create', 'UserController@createUser');
    Route::delete('usuarios/delete/{userId}', 'UserController@deleteUser');

});