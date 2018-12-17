<?php

$router->group(['prefix' => 'habits'], function($router) {
	$router->get('', 'Habits@index');
	$router->post('', 'Habits@store');
	$router->get('{habit}', 'Habits@show');
	$router->put('{habit}', 'Habits@update');
	$router->delete('{habit}', 'Habits@destroy');
	$router->post('{habit}/log', 'Habits@storeLog');
	$router->delete('{habit}/log/{log}', 'Habits@destroyLog');
});
