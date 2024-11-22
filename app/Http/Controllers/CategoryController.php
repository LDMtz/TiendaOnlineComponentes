<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("categories.index");
    }

    public function create(){
        return view("categories.create");
    }

    public function show(string $id){
        return view("categories.show");
    }

    public function edit(string $id){
        return view("categories.edit");
    }

    public function destroy(string $id){
        return view("categories.index");
    }
}
