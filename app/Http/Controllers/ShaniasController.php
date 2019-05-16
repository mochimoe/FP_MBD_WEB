<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShaniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $view1s = \DB::table('ap_transpims')->get();
        $view2s = \DB::table('kapasitas')->get();
        $join1s = \DB::select('SELECT b.id_pengarang,p.nama_pengarang, t1.jenis
                                FROM bukus b JOIN (SELECT k.jenis,m.id_buku
                                                    FROM kategoris k JOIN mempunyais m
                                                    ON k.id = m.id_katagori)t1
                                ON b.id = t1.id_buku
                                join pengarangs p on p.id=b.id_pengarang
                                order by b.id_pengarang;');
        $join2s = \DB::select('SELECT p.nama, t.`id`
                                FROM petugass p LEFT JOIN transpims t
                                ON p.id = t.id_petugas;');

        return view('shanias.index', compact('view1s','view2s','join1s','join2s'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
