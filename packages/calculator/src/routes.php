<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'neeraj\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'neeraj\calculator\CalculatorController@subtract');