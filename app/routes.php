<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@showWelcome'
));



Route::get("/person/add",array(
        "as"=>"person-add",
        "uses"=>"PersonController@getAdd"
        )
    );
Route::post("/person/add",array(
        "as"=>"person-add-post",
        "uses"=>"PersonController@postAdd"
        )
    );

Route::get("/person/viewall",array(
        "as"=>"person-view-all",
        "uses"=>"PersonController@viewAll"
        )
    );
