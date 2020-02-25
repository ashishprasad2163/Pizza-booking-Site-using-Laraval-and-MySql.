@extends('layouts.layout')


@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza.</h1>
    <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id= "name" name="name">
    <select name="type" id="type">
    <option value="margarita">Margarita</option>
    <option value="hawaiian">Hawaiian</option>
    <option value="volcano">Volcano</option>
    <option value="veg supreme">Veg Supreme</option>
    </select>

    <label for="base">Choose your favorate base:</label>
    <select name="base" id="base">
    <option value="cheesy crust">Cheesy Crust</option>
    <option value="garlic crust">Garlic Crust</option>
    <option value="thin & crispy">Thin & crispy</option>
    <option value="thick">Thick</option>
    </select>

    <input type="submit" value="Place your order">
    </form>
</div>
        @endsection

