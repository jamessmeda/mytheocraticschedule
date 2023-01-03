<?php

namespace App\Models;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('contact');
    }
}
