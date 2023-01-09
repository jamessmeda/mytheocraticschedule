<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'action_date',
        'action-type',
        'thing-id',
        'user_id'
    ];

    public function user()

    {

        return $this->belongsTo(User::class);

    }

    public function thing()
    {
        return $this->belongsTo(Thing::class);
    }

    public function userThing()
    {
        return $this->user()->union($this->thing()->toBase());
    }
}
