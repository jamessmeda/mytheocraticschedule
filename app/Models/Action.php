<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'action-date',
        'action-type',
        'thing-id',
        'user_id'
    ];

    public function user()

    {

        return $this->belongsTo(User::class);

    }
}
