<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function create(Request $request)
  {
    Message::create($request->all());

    return redirect()->back()->with("success", "Message Sent");
  }
}
