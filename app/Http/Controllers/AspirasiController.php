<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
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
        $aspirasis = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/aspirasi/index"
        );
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
        $foto = ['foto' => $request->file('foto')];
        $aspirasis = HttpClient::fetch(
            "POST",
            "http://127.0.0.1:8000/api/aspirasi/store",
            $request->all(),
            $foto
        );

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
        $aspirasi = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/aspirasi/show/$id"
        );
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
        $aspirasi = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/aspirasi/update/$id"
        );

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
