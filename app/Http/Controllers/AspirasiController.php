<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasis = Aspirasi::query()->join('users', 'users.id', '=', 'aspirasis.id_user')->orderBy('aspirasis.created_at', 'asc')->get();
        return view('Aspirasi.index', compact('aspirasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $fileHash = $file->hashName();
        $file->move('images/aspirasi', $fileHash);
        $fileName = 'images/aspirasi/' . $fileHash;

        Aspirasi::query()->create([
            'cerita'    => $request->input('cerita'),
            'foto'      => $fileName
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspirasi = Aspirasi::query()->join('users', 'users.id', '=', 'aspirasis.id_user')->where('aspirasis.id', $id)->first();

        return view('Aspirasi.show', compact('aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $aspirasi = Aspirasi::query()->where('id', $id)->first();

        $aspirasi->update([
            'status' => true
        ]);

        return redirect()->route('aspirasi.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
