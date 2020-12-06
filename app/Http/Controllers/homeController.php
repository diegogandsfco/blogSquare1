<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request)
    {
        $entries = \App\Models\blog::orderby('publication_date','ASC')->paginate(12);
        return view('index')
            ->with('entries',$entries); 
    }
}
