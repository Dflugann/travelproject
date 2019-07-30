<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $navSelect = 'home';
        return view('site.index')->with([
            'navSelect' => $navSelect
        ]);
    }
}
