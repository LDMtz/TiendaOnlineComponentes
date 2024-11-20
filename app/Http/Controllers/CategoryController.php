<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("categories.index");
    }

    public function show(string $id){
        return view("categories.index");
    }

    public function edit(string $id){
        return view("categories.index");
    }

    public function destroy(string $id){
        return view("categories.index");
    }
}
