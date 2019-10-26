<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPL extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        return redirect('https://gist.github.com/kn9ts/cbe95340d29fc1aaeaa5dd5c059d2e60');
    } 
}
