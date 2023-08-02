<?php

namespace App\Http\Controllers;

use App\Models\Thing;

//use App\Models\Action;
use Auth;
use Illuminate\Http\Request;

class ThingsController extends Controller
{
    //accept id as a parameter from the route and use it to get the things that belong to that category


    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(int $thing)
    {
//        @dd($thing);
//get only the things that belong to a specified category
        $things = Thing::where('category_id', $thing)->get();
//        $things = Thing::all();
//        @dd($things);
        return view('days', compact('things'));
    }

    public function edit(Thing $thing)
    {
    }

    public function update(Request $request, Thing $thing)
    {
    }

    public function destroy(Thing $thing)
    {
    }
}
