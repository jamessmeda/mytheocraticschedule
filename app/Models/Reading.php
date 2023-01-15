<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_read',
        'action_id',
        'book_read_date_time',
        'book_chapter',
        'book_verse',
        
    ];
}
