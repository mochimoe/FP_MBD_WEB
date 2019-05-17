<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;
use App\Transkem;
use App\Buku;

class AissController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view1()
    {
        $views = DB::table('meminjam')->get();
        return view('aiss.view1', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function view2()
    {
        $views = DB::table('kapasitas_rak')->get();
        return view('aiss.view2', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function1()
    {
        $funcs = DB::select('SELECT tanggal_kembali as tanggal, func2(tanggal_kembali) as banyak_kembali FROM transpims GROUP BY tanggal_kembali;');
        //echo "$func";
        return view('aiss.function1', compact('funcs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function2()
    {
        $funcs = DB::select('SELECT tanggal_kembali as tanggal, func1(tanggal_kembali) as banyak_peminjam FROM transpims GROUP BY tanggal_kembali;');
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
        $procs = DB::select('call proc1(:param1, :param2)',['param1'=>$request->id_buku,
        'param2'=>$request->stok]);
        
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
        //return view('bintangs.procedure2', compact('procs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function procedure2input()
    {
        return view('aiss.procedure2input');
    }

    public function procedure2output(Request $request)
    {
        $procs = DB::select('call cek_nama(:param1)',['param1'=>$request->patternama]);
        
        return view('aiss.procedure2output', compact('procs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join1()
    {
        $joins = DB::select('SELECT a.`id`,a.`nama_anggota`, b.`judul` , k.`jenis`
        FROM anggotas a JOIN transpims t ON a.`id`=t.`id_anggota`
        JOIN dipinjams d ON d.`id_pinjam`=t.`id` JOIN bukus b ON d.`id_buku`=b.`id`
        JOIN mempunyais m ON m.`id_buku`=b.`id` JOIN kategoris k ON k.`id`=m.`id_katagori`;');
        
        return view('aiss.join1', compact('joins'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join2()
    {
        $joins = DB::select('SELECT a.`nama_anggota` , ss.dendaa
        FROM anggotas a LEFT JOIN (
            SELECT t.`id` AS pinjam ,t.`id_anggota` AS idanggota , p.`denda` AS dendaa
            FROM transpims t JOIN transkems p 
            ON t.`id`=p.`id_pinjam`) AS ss
        ON a.`id` = ss.idanggota;');
        
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
