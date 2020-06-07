<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Tutorail 15 Eloquent Models - use Pizza model in PizzaCOntroller
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // Tutorail 15 Eloquent Models - deleted cause we use db table now
        // $pizzas = [
        //     ["type" => "hawaiian" , "base" => "cheesy crust"],
        //     ["type" => "volcano" , "base" => "garlic crust"],
        //     ["type" => "veg supreme" , "base" => "thin & crispy"]
        // ];
        
        //###Interact with pizza table through Pizza model
            //Get all records
            $pizzas = Pizza::all();

            //When not all() - MUST USE GET();
            // $pizzas = Pizza::orderBy("name","desc")->get();
            // $pizzas = Pizza::where("type","hawaiian")->get();
            $pizzas = Pizza::latest()->get();

        return view ("pizzas/index",["pizzas" => $pizzas]);

    }

    public function show( $routeParam ){

        //Tutorial 17- GETTING A SINGLE RECORD
        //Find and show the correct id of pizza according to routeParam
        $pizza = Pizza::findOrFail($routeParam); // "findOrFail"  Shows 404 if unavailable
        return view('pizzas/show',["pizza" => $pizza]);

        //Deleted in Tutorial 17
        //return view('pizzas/show',["routeParam" => $routeParam]);
    }

    public function create(){
        return view ("pizzas/create");
    }

    //Tutorial 19 - POST Request
    public function store(){
        //Handles POST data from pizzas/create
        // Deleted in Tutorial 20
            // error_log(request("name")) ;
            // error_log(request("type")) ;
            // error_log(request("base")) ;

        // Tutorial 20-SAVING RECORDS
        // create a new instance of pizza model - object name=$pizza
        $pizza = new Pizza();

        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        $pizza->toppings = request("toppings");#TUTORIAL 21 - ARRAYS JSON - #REFER inside Pizza model to complte action

        #Log data into terminal
        // error_log($pizza);

        // Save object to the db using "Pizza model instance" through "Pizza model" 
        $pizza->save();

        return redirect("/")->with("msg","Thanks for your order"); //msg is located in welcome view 
        #data inside with() is SESSION DATA
        #/msg is the KEY
    }

    public function destroy($routeParam){
        $pizza = Pizza::findOrFail($routeParam);
        $pizza->delete();

        return redirect("/pizzas");
    }
}
