<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@showWelcome'
));



Route::get("/person/add", array(
    "as" => "person-add",
    "uses" => "PersonController@getAdd"
        )
);
Route::post("/person/add", array(
    "as" => "person-add-post",
    "uses" => "PersonController@postAdd"
        )
);

Route::get("/person/viewall", array(
    "as" => "person-view-all",
    "uses" => "PersonController@viewAll"
        )
);

Route::post("/person/delete", array(
    "as" => "person-delete",
    "uses" => "PersonController@delete"
        )
);

Route::post("/person/edit", array(
    "as" => "person-edit",
    "uses" => "PersonController@edit"
        )
);

Route::post("/person/editpost", array(
    "as" => "person-edit-post",
    "uses" => "PersonController@editPost"
        )
);

