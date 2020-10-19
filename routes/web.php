<?php

Route::get('/', "ProductsController@index")->name("main");
Route::get("/post/create", "ProductsController@create")->name("PosrCreate");
Route::post("post/store", "ProductsController@store")->name("PostStore");
Route::post("post/delete", "ProductsController@delete")->name("PostDelete");
Route::get("post/show/{id}", "ProductsController@show")->name("PostShow");
Route::post("post/comments", "ProductsController@comments")->name("PostComments");
Route::get("post/edit{id}", "ProductsController@edit")->name("EditPost");
Route::post("post/update", "ProductsController@update")->name("PostUpdate");