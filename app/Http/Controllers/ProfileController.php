<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::with('profile')->where('id', auth()->user()->id)->first();
        // dd($profile);
        return view('profile.index', [
            'user' => $profile
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'nama_lengkap' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'pendidikan' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);

        Profile::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat_ktp' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'no_telp' => $request->no_telp,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('profile.index')->with('status', 'Data berhasil disimpan');
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
        $profile = Profile::findOrFail($id);
        return view('profile.edit', [
            'profile' => $profile
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
            'nama_lengkap' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'pendidikan' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);

        Profile::where('id', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat_ktp' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'no_telp' => $request->no_telp,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('profile.index')->with('status', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('profile.index')->with('status', 'Data berhasil dihapus');
    }
}
