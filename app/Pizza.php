<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    #connect to table MANUALLY using naming convention (Pizza model => pizzas table). laravel does this automatically as well
    // protected $table = "table name";

    #TUTORIAL 21 - ARRAYS JSON
    #convert toppings[] into JSON string/longtext automatically
    protected $casts =[
        "toppings" => "array"
    ];
}
