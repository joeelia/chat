<?php

namespace App\Http\Controllers;

use App\Events\MessagePosted;
use Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function post(Request $request)
    {
        event(new MessagePosted($request->get('message')));
    }
}
