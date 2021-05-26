<?php
$router = new AltoRouter();

// router auth login
$router->map('GET', '/login', 'App\Controllers\AdminAuthController@indexLogin', '');
$router->map('POST', '/login', 'App\Controllers\AdminAuthController@login', '');

// router auth register
$router->map('GET', '/register', 'App\Controllers\AdminAuthController@indexRegister', '');
$router->map('POST', '/register', 'App\Controllers\AdminAuthController@register', '');

// router chat
$router->map('GET', '/messages', 'App\Controllers\ChatController@index', '');
$router->map('GET', '/get-session', 'App\Controllers\ChatController@getSession', '');
$router->map('POST', '/get-msg', 'App\Controllers\ChatController@getMsg', '');
$router->map('POST', '/send-msg', 'App\Controllers\ChatController@sendMsg', '');
$router->map('POST', '/send-touser', 'App\Controllers\ChatController@sendToUser', '');
$router->map('POST', '/search-user', 'App\Controllers\ChatController@searchUser', '');
$router->map('POST', '/add-user-chat', 'App\Controllers\ChatController@addUser', '');

// router customer
$router->map('GET', '/admin/customer', 'App\Controllers\AdminCustomerController@index', '');
$router->map('GET', '/admin/edit-customer/[i:MSKH]', 'App\Controllers\AdminCustomerController@show', '');
$router->map('GET', '/admin/delete-customer/[i:MSKH]', 'App\Controllers\AdminCustomerController@delete', '');
$router->map('GET', '/admin/add-customer', 'App\Controllers\AdminCustomerController@create', '');
$router->map('POST', '/admin/save-customer', 'App\Controllers\AdminCustomerController@store', '');
$router->map('POST', '/admin/update-customer/[i:MSKH]', 'App\Controllers\AdminCustomerController@update', '');

// router user
$router->map('GET', '/admin/users', 'App\Controllers\AdminUserController@index', '');
$router->map('GET', '/admin/edit-user/[i:userId]', 'App\Controllers\AdminUserController@show', '');
$router->map('GET', '/admin/delete-user/[i:userId]', 'App\Controllers\AdminUserController@delete', '');
$router->map('GET', '/admin/add-user', 'App\Controllers\AdminUserController@create', '');
$router->map('POST', '/admin/save-user', 'App\Controllers\AdminUserController@store', '');
$router->map('POST', '/admin/update-user/[i:userId]', 'App\Controllers\AdminUserController@update', '');

// router category
$router->map('GET', '/admin/categories', 'App\Controllers\AdminCategoryController@index', '');
$router->map('GET', '/admin/edit-category/[i:catId]', 'App\Controllers\AdminCategoryController@show', '');
$router->map('GET', '/admin/delete-category/[i:catId]', 'App\Controllers\AdminCategoryController@delete', '');
$router->map('GET', '/admin/add-category', 'App\Controllers\AdminCategoryController@create', '');
$router->map('POST', '/admin/save-category', 'App\Controllers\AdminCategoryController@store', '');
$router->map('POST', '/admin/update-category/[i:catId]', 'App\Controllers\AdminCategoryController@update', '');

// router event
$router->map('GET', '/admin/events', 'App\Controllers\AdminEventControlle@index', '');
$router->map('GET', '/admin/edit-event/[i:eventId]', 'App\Controllers\AdminEventControlle@show', '');
$router->map('GET', '/admin/delete-event/[i:eventId]', 'App\Controllers\AdminEventControlle@delete', '');
$router->map('GET', '/admin/add-event', 'App\Controllers\AdminEventControlle@create', '');
$router->map('POST', '/admin/save-event', 'App\Controllers\AdminEventControlle@store', '');
$router->map('POST', '/admin/upload-event', 'App\Controllers\AdminEventControlle@upload', '');
$router->map('GET', '/admin/upload-event', 'App\Controllers\AdminEventControlle@upload', '');
$router->map('POST', '/admin/update-event/[i:eventId]', 'App\Controllers\AdminEventControlle@update', '');

// router info
$router->map('GET', '/info', 'App\Controllers\InfoController@index', '');
$router->map('POST', '/edit-summary', 'App\Controllers\InfoController@editSummary', '');
$router->map('POST', '/edit-education', 'App\Controllers\InfoController@editEducation', '');
$router->map('POST', '/edit-work', 'App\Controllers\InfoController@editWork', '');
$router->map('POST', '/add-work', 'App\Controllers\InfoController@addWork', '');
$router->map('POST', '/add-education', 'App\Controllers\InfoController@addEducation', '');

// router event
$router->map('GET', '/event', 'App\Controllers\EventController@index', '');
$router->map('GET', '/event/[i:eventId]', 'App\Controllers\EventController@getEvent', '');