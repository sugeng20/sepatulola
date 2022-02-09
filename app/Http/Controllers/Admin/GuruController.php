<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.admin.content.index', [
            'items' => Content::where('role', 'GURU')->with('category')->get(),
            'route_' => 'guru'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.content.create', [
            'route_' => 'guru',
            'role_' => 'GURU',
            'categories' => Category::where('role', 'GURU')->get()
        ]);
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
            'category_id' => 'required',
            'title' => 'required',
            'cover' => 'required',
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

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'file_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/file/', $fileName);
            $data['file'] = $fileName;
        }

        Content::create($data);

        return redirect()->route('guru.index')->with('status', 'Berhasil Menambahkan Konten Baru');
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
        return view('pages.backend.admin.content.edit', [
            'route_' => 'guru',
            'role_' => 'GURU',
            'categories' => Category::where('role', 'GURU')->get(),
            'item' => Content::with('category')->findOrFail($id)
        ]);
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
            'category_id' => 'required',
            'title' => 'required',
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

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'file_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/file/', $fileName);
            $data['file'] = $fileName;
        }

        Content::findOrFail($id)->update($data);

        return redirect()->route('guru.index')->with('status', 'Berhasil Mengubah Konten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::findOrFail($id)->delete();
        return redirect()->route('guru.index')->with('status', 'Berhasil Menghapus Konten');
    }
}
