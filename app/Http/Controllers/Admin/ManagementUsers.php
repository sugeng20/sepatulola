<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagementUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.backend.admin.management-users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.management-users.create');
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
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'password' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'foto' => 'required',
            'role' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = 'users_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/users/', $fileName);
            $data['foto'] = $fileName;
        }
        User::create($data);
        return redirect()->route('management-users.index')->with('status', 'Berhasil Menambahkan User Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.backend.admin.management-users.show', compact('user'));
    }

    public function gantiPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|max:255|same:konfirmasi_password',
            'konfirmasi_password' => 'required|max:255'
        ]);

        User::findOrFail($id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('management-users.index')->with('status', 'Berhasil  Mengubah Password User');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.backend.admin.management-users.edit', compact('user'));
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
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'username' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'role' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = 'users_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('backend/images/users/', $fileName);
            $data['foto'] = $fileName;
        }
        User::findOrFail($id)->update($data);
        return redirect()->route('management-users.index')->with('status', 'Berhasil  Mengupdate User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('management-users.index')->with('status', 'Berhasil  Menghapus User');
    }
}
