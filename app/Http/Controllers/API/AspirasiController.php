<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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

        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $aspirasis
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
        $file = $request->file('foto');
        $fileHash = $file->hashName();
        $file->move('images/aspirasi', $fileHash);
        $fileName = 'images/aspirasi/' . $fileHash;

        $aspirasi = Aspirasi::query()->create([
            'cerita'    => $request->input('cerita'),
            'foto'      => $fileName
        ]);

        return response()->json([
            "status" => true,
            "message" => "Berhasil Upload Data",
            "data" => $aspirasi
        ]);
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

        return response()->json([
            "status" => true,
            "message" => "Berhasil Upload Data",
            "data" => $aspirasi
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
        $aspirasi = Aspirasi::query()->where('id', $id)->first();

        $aspirasi->update([
            'status' => true
        ]);

        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $aspirasi
        ]);
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
