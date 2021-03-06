<?php

namespace App\Http\Controllers\Admin;

use App\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_link = config('nav_menu_links');
        $collections = Collection::latest()->get();
        return view('admin.collections.index',compact('collections','menu_link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_link = config('nav_menu_links');

        return view('admin.collections.create',compact('menu_link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'preview' => 'nullable | image | max:500'
        ]);
        $preview = Storage::disk('public')->put('preview_img', $request->preview);
        $validated_data['preview'] = $preview;

        Collection::create($validated_data);

        $collection = Collection::orderBy('id','desc')->first();

        return redirect()->route('admin.collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        $menu_link = config('nav_menu_links');
        return view('admin.collections.show', compact('collection','menu_link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $menu_link = config('nav_menu_links');
        return view('admin.collections.edit', compact('collection','menu_link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'preview' => 'nullable | image | max:500'
        ]);
        $preview = Storage::disk('public')->put('preview_img', $request->preview);
        $validated_data['preview'] = $preview;

        $collection->update($validated_data);
        return redirect()->route('admin.collections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()-> route('admin.collections.index');
    }
}
