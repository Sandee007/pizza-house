@extends("layouts/layout")

@section("content")
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List <br>
        </div> 
        
        {{-- Tutorail 15 - Eloquent Models --}}
        @foreach ( $pizzas as $pizza )
            {{-- $ValueInForeachLoop -> tableColumn --}}
            {{-- <p>{{ $pizza->name}} -- {{ $pizza->type}} -- {{ $pizza->base}} </p> --}}
            <div class="pizza-item">
                <img class="pizza-item-img"src="/img/GrandSA.ico" alt="GTA SA">
                <h4><a href="/pizzas/{{$pizza->id}} "> {{$pizza->name}} </a></h4>
            </div>         
        @endforeach 

        {{-- Tutorial 3-4-5 --}}
        {{-- <p> {{ $type }} - {{$base}} - {{$price}}</p> --}}

        {{-- @if( $price> 15)
            This Pizza is Expensive
        @elseif( $price <5 )
            This pizza is Cheap
        @else
            This pizza is normal priced
        @endif --}}

        {{-- Unless --}}
        {{-- @unless ( $base == "cheesy crust")
            <p>You don't have a cheesy crust</p>
        @endunless --}}

        {{-- PHP DIRECTIVE - can use vanilla php inside --}}
        {{-- @php
            $name = "Sand" ;
            echo $name;
        @endphp --}}

        {{-- Tutorail 9 Query params --}}
        {{-- <p> {{$name}} </p>
        <p> {{$age}} </p> --}}

        {{-- Deleted in Tutorial 15 --}}
        {{-- Tutorial 6 --}}
        {{-- @foreach ( $pizzas as $pizza )
            <div>
            {{$loop->index}}    {{ $pizza["type"]}} - {{ $pizza["base"]}}
            @if ( $loop->first)
                <span> - first one in the loop</span>
            @elseif ( $loop->last)
                <span> - last one in the loop</span>
            @endif
            </div>
        @endforeach --}}

    </div>
</div>
@endsection


