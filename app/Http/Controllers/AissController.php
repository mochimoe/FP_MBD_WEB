<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AissController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view1()
    {
        //$views = DB::table('nama view1')->get();
        return view('aiss.view1', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function view2()
    {
        //$views = DB::table('nama view2')->get();
        return view('aiss.view2', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function1()
    {
        //$funcs = DB::table('anggotas')->select(DB::raw('nama_anggota , cekumursekarang(id) as umur'))->get();
        //echo "$func";
        return view('aiss.function1', compact('funcs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function2()
    {
        //$funcs = DB::table('anggotas')->select(DB::raw('nama_anggota , banyakpinjam(id) as banyak_pinjam'))->get();
        //echo "$func";
        return view('aiss.function2', compact('funcs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function procedure1input()
    {
        return view('aiss.procedure1input');
    }

    public function procedure1output(Request $request)
    {
        $procs = DB::select('call hitungdenda(:param1)',['param1'=>$request->id_pengembalian]);
        
        $transkems = Transkem::all();
        return view('transkems.index', compact('transkems'));
        //return view('bintangs.procedure2', compact('procs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function procedure2()
    {
        $procs = DB::select('call (nama procedure2())');
        
        return view('aiss.procedure2', compact('procs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join1()
    {
        $joins = DB::select('query joinnya');
        
        return view('aiss.join1', compact('joins'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join2()
    {
        $joins = DB::select('query joinnya');
        
        return view('aiss.join2', compact('joins'));
        //return view('bintangs.view1', ['views' => $views]);
    }


    public function index()
    {
        //
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
