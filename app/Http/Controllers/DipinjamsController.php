<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dipinjam;

class DipinjamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dipinjams = Dipinjam::all();

        return view('dipinjams.index', compact('dipinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dipinjams.create');
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
            'id_buku' => 'required|max:10'
        ]);
        $dipinjam = Dipinjam::create($validatedData);
   
        return redirect('/dipinjams')->with('success', 'New Data is successfully saved');
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
        $dipinjam = Dipinjam::find($id);

        return view('dipinjams.edit')->with('dipinjam',$dipinjam);
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
        $validatedData = $request->validate([
            'id_pinjam' => 'required|max:10',
            'id_buku' => 'required|max:10'
        ]);
        $dipinjam = Dipinjam::update($validatedData);
        return redirect('/dipinjams')->with('success', 'Data is successfully updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dipinjam = Dipinjam::find($id);

        $dipinjam->delete();
        return redirect('/dipinjams')->with('success','Data removed');
    }
}
