<?php

return [

    // PAGES
    ''=> 'PagesController@index',
    'about'=> 'PagesController@about',


    // USERS
    'users' => 'UsersController@users',
    'user' => 'UsersController@user',
    'search' => 'UsersController@search',


    // INSERTS
    'addUser' => 'InsertController@addUser',
    
    // REDIRECTS
    'searchUser' => 'RedirectController@searchUser',


    // NOT
    '403' => 'UsersController@forbidden',
    '404' => 'PagesController@notFound', 

];