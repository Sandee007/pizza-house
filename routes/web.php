<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Tutorial 3-4-5
// Route::get('/pizzas', function () {
//     //can pass values directtly to the view BY PASSING A SECOND PARAM WITH VIEW
//     //Also we can create a var and pass it in as an array with the view
//         //imagine getting data from db like this

//     $pizzas = [
//         "type" => "hawaiian" , 
//         "base" => "garlic crust",
//         "price" => 10
//     ];
//     return view('pizzas',$pizzas);

// });

// Tutorial 6
/*
Route::get('/pizzas', function () {
    //get data from db

    // TUTORIAL 11 - CUT AND PASTED IN PIZZACONTROLLER@INDEX
    // $pizzas = [
    //     ["type" => "hawaiian" , "base" => "cheesy crust"],
    //     ["type" => "volcano" , "base" => "garlic crust"],
    //     ["type" => "veg supreme" , "base" => "thin & crispy"]
    // ];

    // return view('pizzas',["pizzas" => $pizzas]);

    // Tutorial 9 
    //Can access any query param by using REQUEST() PARAM

    // Method 2
    // TUTORIAL 11 - CUT AND PASTED IN PIZZACONTROLLER@INDEX
    // return view('pizzas',[
    //     "pizzas" => $pizzas,
    //     "name" => request('name'),
    //     "age" => request('age')
    //     ]);

    // Method 1
    // $name = request("name");
    // $age = request("age");

    // return view('pizzas',[
    //     "pizzas" => $pizzas,
    //     "name" => $name,
    //     "age" => $age
    //     ]);


});

// Tutorail 10 ROUTE PARAMS AKA WILDCARDS
Route::get('/pizzas/{routeParam}', function ( $routeParam ) {
    // user the $routeParam var to query the db for a record

    // TUTORIAL 11 - CUT AND PASTED IN PIZZACONTROLLER@SHOW along with "function($routeParam)"
    // return view('details',["routeParam" => $routeParam]);
});
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get ("/pizzas" , "PizzaController@index" ) ;
Route::post("/pizzas", "PizzaController@store" );
//Create should be abouve {routeParam} - otherwise browser takes "create" as routeParam
Route::get ("/pizzas/create" , "PizzaController@create" );
Route::get ("/pizzas/{routeParam}" , "PizzaController@show" );
Route::delete("/pizzas/{routeParam}","PizzaController@destroy");

Auth::routes();
Route::get('/home', 'HomeController@index')->name("home");