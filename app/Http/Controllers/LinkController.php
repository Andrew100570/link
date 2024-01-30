<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LinkController extends Controller
{
    public function link(Request $request)
    {

        return mb_substr($request->input('link') ,1, 1 ) ;
    }

}
