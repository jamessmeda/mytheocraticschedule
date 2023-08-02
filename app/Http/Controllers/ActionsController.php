<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Reading;
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

//        return redirect(route('day'));

        $cat = \App\Models\Thing::find($request['thing-id']);

        return redirect(route('day', ['id' => $cat->category_id]));
    }

    public function storeReading(Request $request)
    {
        $request->validate([
            'thing-id' => 'required',
            'action_date' => 'required',
            'action-type' => 'required',
            //adding the bible reading part
            'book' => 'required',
            'verse' => 'required',
            'chapter' => 'required',
        ]);
        $actionDone = new Action([
            'user_id' => \Auth::id(),
            'action-type' => 'done',
            'thing-id' => $request['thing-id'],
            'action_date' => $request['action_date']
        ]);
        $actionDone->save();
        $readingDone = new Reading([
//            'thing-id' => $request['thing-id'],
            'book_read' => $request['book'],
//            'action_id' => $request['action_id'],
            'action_id' => $actionDone->id,
            'book_read_date_time' => $request['action_date'],
            'book_chapter' => $request['chapter'],
            'book_verse' => $request['verse'],
        ]);

        $readingDone->save();
//add the id of the category to the day view
        $cat = \App\Models\Thing::find($request['thing-id']);

        return redirect(route('day', ['id' => $cat->category_id]));
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
        $action->delete();
//        return redirect(route('day'));
        $cat = \App\Models\Thing::find($action['thing-id']);

        return redirect(route('day', ['id' => $cat->category_id]));

    }
}
