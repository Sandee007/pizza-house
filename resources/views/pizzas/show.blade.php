@extends("layouts/layout")

@section("content")
<div class="jumbotron text-center">
<div class="wrapper pizza-details">
    {{-- We have access to db rows through PizzaController@show now 
        Cause we Passed in the id in pizzas table as routeParam
        So we'll access name field from each record--}}
    <h1> Order for {{$pizza->name }} </h1>
    <p class="type"> Type - {{$pizza->type}} </p>
    <p class="base"> Base - {{$pizza->base}} </p>

    {{-- #TUTORIAL 21 - ARRAYS JSON - Output Toppings--}} 
    <p class="toppings">Extra Toppings:</p>
    <ul>
        {{-- PizzaController@store - That's where $pizza comes to the below --}}
        @foreach ($pizza->toppings as $topping)
            <li> {{$topping}} </li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id}} " method="POST">
        @csrf
        @method("DELETE")
        <button>Complete Order</button>
    </form>
    <a href="/pizzas" class="back"> <-Back to all pizzas </a>
</div>
</div>



@endsection



