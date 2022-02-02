<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dongeng;
use Illuminate\Http\Request;

class DongenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Dongeng::all();
        return view('pages.backend.admin.dongeng.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.dongeng.create');
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
            'judul' => 'max:255|required',
            'deskripsi' => 'required',
            'link_youtube' => 'required',
        ]);

        Dongeng::create($request->all());

        return redirect()->route('dongeng.index')->with('status', 'Berhasil Menambahakn Data Dongeng Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dongeng  $dongeng
     * @return \Illuminate\Http\Response
     */
    public function show(Dongeng $dongeng)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dongeng  $dongeng
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Dongeng::findOrFail($id);
        return view('pages.backend.admin.dongeng.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dongeng  $dongeng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'max:255|required',
            'deskripsi' => 'required',
            'link_youtube' => 'required',
        ]);

        Dongeng::findOrFail($id)->update($request->all());

        return redirect()->route('dongeng.index')->with('status', 'Berhasil Mengupdate Data Dongeng');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dongeng  $dongeng
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dongeng::findOrFail($id)->delete();
        return redirect()->route('dongeng.index')->with('status', 'Berhasil Menghapus Data Dongeng');
    }
}
