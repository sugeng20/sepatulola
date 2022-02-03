<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Game::all();
        return view('pages.backend.admin.game.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.game.create');
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
            'title' => 'required|max:255',
            'description' => 'required',
            'cover' => 'required',
        ]);
        $data = $request->all();
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = 'cover_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/cover/', $fileName);
            $data['cover'] = $fileName;
        }
        Game::create($data);
        return redirect()->route('game.index')->with('status', 'Berhasil Menambahkan Data Game Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Game::findOrFail($id);
        return view('pages.backend.admin.game.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $data = $request->all();
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = 'cover_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/cover/', $fileName);
            $data['cover'] = $fileName;
        }
        Game::findOrFail($id)->update($data);
        return redirect()->route('game.index')->with('status', 'Berhasil Mengubah Data Game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Game::findOrFail($id)->delete();
        return redirect()->route('game.index')->with('status', 'Berhasil Menghapus Data Game');
    }
}
