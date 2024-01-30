<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class LinkController extends Controller
{
    public function link(Request $request)
    {

        return ['new' => url()->previous().'/'.rand(),'old' => $request->input('link')];

    }

}
