@extends("layouts/layout")

@section("content")
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Order a Pizza
            <form action="/pizzas" method="POST">  {{--Same route can handle a both post and a get request same time --}}
        </div>
                @csrf
                <div class="form-group">
                    <label for="name"> Your Name  </label>
                    <input type="text" id="name" name="name" >
                </div>
                <div class="form-group">
                    <label for="type"> Choose pizza type  </label>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <label for="base"> Choose base type  </label>
                    <select name="base" id="base">
                        <option value="cheesy crust">Cheesy Crust</option>
                        <option value="garlic crustn">Garlic Crust</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="thick">Thick</option>
                    </select>
                </div>
                <div class="form-group">
                    <fieldset >
                        <label > Extra Toppings</label> <br>
                        {{-- toppings[] used to store data as an JSON/array/longtext  --}}
                        <input type="checkbox" name="toppings[] " value="mushrooms"> Mushrooms <br>
                        <input type="checkbox" name="toppings[] " value="peppers"> Peppers <br>
                        <input type="checkbox" name="toppings[] " value="garlics"> Garlic <br>
                        <input type="checkbox" name="toppings[]" value="olives"> Olives<br>
                    </fieldset>
                    <input type="submit" value="Order Pizza">
                </div>
            </form>
        {{-- </div> class="title m-b-md --}}
    </div>
</div>

@endsection



