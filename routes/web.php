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

Route::get('/',[
        'uses'=>'IndexController@affiche',
        'as'=>'index'
]

    );
/*
Route::get('/',[
        'uses'=>'QualificationController@affiche',
        'as'=>'services'
    ]

);
*/

Route::get('/services', function () {
    return view('services');
});


    Route::get('/contact', function () {
        return view('contact');
    });



        Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function () {
            CRUD::resource('footer', 'FooterCrudController');
            CRUD::resource('qualification', 'QualificationCrudController');
            CRUD::resource('detail_perso', 'Detail_persoCrudController');

        });


