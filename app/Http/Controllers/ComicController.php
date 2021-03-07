<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Detail;
use App\Collection;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_link = config('nav_menu_links');
        $comics = Comic::latest()->get();
        $collections = Collection::all();
        return view('guest.comics.index',compact('comics','menu_link','collections'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $details = Detail::latest()->get();
        $menu_link = config('nav_menu_links');
        return view('guest.comics.show', compact('comic','menu_link','details'));
    }
}