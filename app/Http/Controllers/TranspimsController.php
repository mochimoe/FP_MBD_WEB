<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transpim;

class TranspimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transpims = Transpim::all();

        return view('transpims.index', compact('transpims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transpims.create');
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
            'id_anggota' => 'required|max:10',
            'id_petugas' => 'required|max:10',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);
        $transpim = Transpim::create($validatedData);
   
        return redirect('/transpims')->with('success', 'New Transaction is successfully saved');
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
        $transpim = Transpim::find($id);

        $transpim->delete();
        return redirect('/transpims')->with('success','Transaction removed');
    }
}
