<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transkem;

class TranskemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transkems = Transkem::all();

        return view('transkems.index', compact('transkems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transkems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pinjam' => 'required|max:10',
            'id_petugas' => 'required|max:10',
            'id_buku' => 'required|max:10',
            'tanggal_pengembalian' => 'required'
        ]);
        $transkem = Transkem::create($validatedData);
   
        return redirect('/transkems')->with('success', 'New Transaction is successfully saved');
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
        $transkem = Transkem::find($id);

        $transkem->delete();
        return redirect('/transkems')->with('success','Transaction removed');
    }
}
