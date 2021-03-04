<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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
        return view('admin.comics.index',compact('comics','menu_link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_link = config('nav_menu_links');
        return view('admin.comics.create',compact('menu_link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->title);

        $validated_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'availability' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'cover' => 'nullable | image | max:500',
            'showim' => 'nullable | image | max:1000'
        ]);
        $showim = Storage::disk('public')->put('show_img', $request->cover);
        $cover = Storage::disk('public')->put('cover_img', $request->cover);
        $validated_data['cover'] = $cover;
        $validated_data['showim'] = $showim;

        Comic::create($validated_data);
        
        $comic = Comic::orderBy('id','desc')->first();
       
        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $menu_link = config('nav_menu_links');
        return view('admin.comics.show', compact('comic','menu_link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $menu_link = config('nav_menu_links');
        return view('admin.comics.edit', compact('comic','menu_link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'cover' => 'nullable | image | max:500',
            'showim' => 'nullable | image | max:1000'
        ]);
        $showim = Storage::disk('public')->put('show_img', $request->showim);
        $cover = Storage::disk('public')->put('cover_img', $request->cover);
        $validated_data['cover'] = $cover;
        $validated_data['showim'] = $showim;

        $comic->update($validated_data);
       
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()-> route('admin.comics.index');
    }
}
