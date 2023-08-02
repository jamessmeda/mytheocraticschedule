<?php

namespace App\Http\Controllers;

use App\Models\Category;

//use App\Models\Thing;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //get all things from the database and send them to the view
//        $things = Thing::all();
        return view('dashboard', compact('categories'));
    }
}
