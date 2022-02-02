<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Video::all();
        return view('pages.backend.admin.video.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.video.create');
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
            'title' => 'max:255|required',
            'description' => 'required',
            'link_youtube' => 'required',
            'category' => 'required',
        ]);

        Video::create($request->all());

        return redirect()->route('video.index')->with('status', 'Berhasil Menambahakn Data Video Baru');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Video::findOrFail($id);
        return view('pages.backend.admin.video.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'max:255|required',
            'description' => 'required',
            'link_youtube' => 'required',
            'category' => 'required',
        ]);

        Video::findOrFail($id)->update($request->all());

        return redirect()->route('video.index')->with('status', 'Berhasil Mengupdate Data Video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::findOrFail($id)->delete();
        return redirect()->route('video.index')->with('status', 'Berhasil Menghapus Data Video');
    }
}
