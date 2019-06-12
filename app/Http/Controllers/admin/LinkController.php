<?php

namespace App\Http\Controllers\admin;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::get();
        return view('admin.link.display', ['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'href' => 'required'
        ]);
        $link = new Link([
            'name' => $request-> get('name'),
            'href' => $request-> get('href')
        ]);
        $link->save();

        return redirect('/admin/link')->with('success', 'Link has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        $link = Link::find($link->id);

        return view('admin.link.edit', ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $request->validate([
            'name' => 'required',
            'href' => 'required'
        ]);

        $link = Link::find($link->id);
        $link->name = $request->get('name');
        $link->href = $request->get('href');
        $link->save();

        return redirect('admin/link')->with('success', 'Link has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link = Link::find($link->id);
        $link->delete();

        return redirect('admin/link')->with('success', 'Link has been deleted');
    }
}
