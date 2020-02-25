<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //
    public function index(){
        
    //$pizzas= Pizza::all();

    $pizzas = Pizza::orderBy('name','desc')->get();
        return view('pizzas.index',['pizzas'=>$pizzas, ]);  //usually get data from db but right now is hard coded.
    }

    public function show($id){

        $pizza=Pizza::findOrFail($id);
        return view('pizzas.show',['pizza'=> $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }


    public function store(){

        error_log(request('name'));
        return redirect('/');
    }
}
