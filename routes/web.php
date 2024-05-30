<?php
use App\Core\Routing\Route;
use App\Middleware\BlockChrome;
use App\Middleware\BlockIE;

Route::get('/panel','PanelController@index',[Auth::class]);


Route::get('/','HomeController@index');


Route::get('/post/{slug}','PostController@single');
Route::get('/post/{slug}/comment/{cid}','PostController@comment');

Route::get('/product/{id}','PostController@comment');


Route::get('/todo/list','TodoController@list',[BlockChrome::class,BlockIE::class]);

Route::get('/todo/remove','TodoController@remove');

Route::get('/archive','ArchiveController@index');
Route::get('/archive/articles','ArchiveController@articles');
Route::get('/archive/products','ArchiveController@products');


Route::get('/a',function(){
    echo "welcome" ;
});

Route::get('/b',function(){
    view('archive.index');
});

Route::put('/c',['Controller','Method']);

Route::get('/d','Controller@Method');
