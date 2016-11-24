<?php

return [

    // PAGES
    ''=> 'PagesController@index',
    'about'=> 'PagesController@about',


    // USERS
    'users' => 'UsersController@users',
    'user' => 'UsersController@user',
    'search' => 'UsersController@search',
    'profile' => 'UsersController@profile',

    'registr' => 'UsersController@registr',
    'login' => 'UsersController@login',
    'exit' => 'UsersController@toExit',
    
    'logUser' => 'UsersController@logUser',

    // INSERTS
    'addUser' => 'InsertController@addUser',
    'regUser' => 'InsertController@regUser',
    
    // REDIRECTS
    'searchUser' => 'RedirectController@searchUser',


    // NOT
    '403' => 'UsersController@forbidden',
    '404' => 'PagesController@notFound', 

];