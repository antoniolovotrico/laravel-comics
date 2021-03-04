<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $menu_link = config('nav_menu_links');
        return view('guest.index',compact('menu_link'));
    }
}
