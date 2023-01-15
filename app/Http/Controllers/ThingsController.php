<?php

namespace App\Http\Controllers;

use App\Models\Thing;

//use App\Models\Action;
use Auth;
use Illuminate\Http\Request;

class ThingsController extends Controller
{
    public function index()
    {

        $things = Thing::all();

        return view('days', compact('things'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Thing $thing)
    {

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
