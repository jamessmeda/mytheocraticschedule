<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'thing-id' => 'required',
            'action_date' => 'required',
            'action-type' => 'required',
        ]);
//        dd($request);
        $actionDone = new Action([
            'user_id' => \Auth::id(),
            'action-type' => 'done',
            'thing-id' => $request['thing-id'],
            'action_date' => $request['action_date']
        ]);
        $actionDone->save();

        return redirect(route('day'));
    }

    public function show(Action $action)
    {
    }

    public function edit(Action $action)
    {
    }

    public function update(Request $request, Action $action)
    {
    }

    public function destroy(Action $action)
    {
    }
}
