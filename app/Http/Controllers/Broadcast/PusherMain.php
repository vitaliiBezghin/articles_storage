<?php

namespace App\Http\Controllers\Broadcast;

use App\Events\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PusherMain extends Controller
{
    public function index ()
     {
         Message::dispatch();
         dd(date('Y/d'));
     }
}
