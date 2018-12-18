<?php

$router->group(['prefix' => 'habits'], function($router) {
	// habits
	$router->get('', 'Habits@index');
	$router->post('', 'Habits@store');
	$router->get('{habit}', 'Habits@show');
	$router->put('{habit}', 'Habits@update');
	$router->delete('{habit}', 'Habits@destroy');

	// logs
	$router->get('{habit}/logs', 'Logs@index');
	$router->post('{habit}/logs', 'Logs@store');
});

$router->delete('logs/{log}', 'Logs@destroy');
