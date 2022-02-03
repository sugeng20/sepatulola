<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Ebook::all();
        return view('pages.backend.admin.ebook.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.ebook.create');
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
            'file' => 'required',
            'cover' => 'required',
        ]);
        $data = $request->all();
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'file_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/file/', $fileName);
            $data['file'] = $fileName;
        }
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = 'cover_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/cover/', $fileName);
            $data['cover'] = $fileName;
        }
        Ebook::create($data);
        return redirect()->route('ebook.index')->with('status', 'Berhasil Menambahkan Data Ebook Baru');
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
        $item = Ebook::findOrFail($id);
        return view('pages.backend.admin.ebook.edit', compact('item'));
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
            'description' => 'required'
        ]);
        $data = $request->all();
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'file_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/file/', $fileName);
            $data['file'] = $fileName;
        }
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = 'cover_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/cover/', $fileName);
            $data['cover'] = $fileName;
        }
        Ebook::findOrFail($id)->update($data);
        return redirect()->route('ebook.index')->with('status', 'Berhasil mengubah Data Ebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ebook::findOrFail($id)->delete();
        return redirect()->route('ebook.index')->with('status', 'Berhasil Menghapus Data Ebook');
    }
}
