<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Editora::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editora = Editora::create($request->all());
        return $editora;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function show(Editora $editora)
    {
        return $editora;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editora $editora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editora  $editora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editora $editora)
    {
        //
    }
}
