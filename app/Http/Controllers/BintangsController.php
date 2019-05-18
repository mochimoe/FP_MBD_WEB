<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;
use App\Transkem;

class BintangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function queryindividu($func1=NULL, $func2=NULL)
    {
        $view1s = \DB::table('judul_banyak_dipinjam')->get();
        $view2s = \DB::table('judul_pengarang_jenis')->get();
        $join1s = \DB::select('SELECT judul, tanggal_pinjam, tanggal_pengembalian FROM 
        (SELECT judul, tanggal_pinjam, tanggal_kembali, tp.id AS idpinjam 
        FROM dipinjams dp JOIN transpims tp ON dp.id_pinjam = tp.id 
        JOIN bukus b ON b.id= dp.id_buku) AS t 
        LEFT JOIN transkems tk ON t.idpinjam = tk.id_pinjam');
        $join2s = \DB::select('SELECT nama_anggota AS nama, judul FROM 
        dipinjams dp JOIN transpims tp ON dp.id_pinjam = tp.id
        JOIN anggotas a ON a.id = tp.id_anggota
        JOIN bukus b ON b.id = dp.id_buku;');
        $trigger1s = \DB::table('log_pinjam_kembali')->get();
        $proc2s= \DB::select('call tidakpinjam()');
        return view('bintangs.queryindividu', compact('view1s','view2s','join1s','join2s','trigger1s','proc2s', 'func1', 'func2'));   
    }

    public function prosesData(Request $request){
        if ($request->has('param1_fungsi1')) {

            //echo "disini 1";

            //handle form1
            $param1 = $request->param1_fungsi1;
            $func1s = \DB::select('select nama_anggota as nama, cekumursekarang(?) as umur from anggotas where id = ?',[$param1,$param1]);
            //print_r($fu-1];nc1s[$param1-1]);
            $arrayumur = $func1s[$param1];
    
           return BintangsController::queryindividu($arrayumur, NULL);
        }

        if ($request->has('param1_prosedur1')) {

            //echo "disini 1";

            //handle form1
            $param3 = $request->param1_prosedur1;
            $proc1s = \DB::select('call hitungdenda(?)',[$param3]);
            //print_r($proc1s);
            //print_r($fu-1];nc1s[$param1-1]);
    
           return BintangsController::queryindividu(NULL,NULL);
        }

        if ($request->has('param1_fungsi2')) {
            //echo("disini 2");

            $param2 = $request->param1_fungsi2;
            // print_r($param2);
            // echo(" beriku: ");
            $func2s = \DB::select('select nama_anggota as nama,banyakpinjam(?) as res from anggotas where id = ?',[$param2,$param2]);
    
            // print_r($func1s);
            // echo"lol";
             //print_r($func2s);
            $res = $func2s[0];
            // print_r($res);
           return BintangsController::queryindividu(NULL, $res);
        }
    }

    public function view1()
    {
        $views = DB::table('judul_buku_nama_pengarang')->get();
        return view('bintangs.view1', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function view2()
    {
        $views = DB::table('judul_buku_tanggal_pinjam')->get();
        return view('bintangs.view2', compact('views'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function1()
    {
        $funcs = DB::table('anggotas')->select(DB::raw('nama_anggota , cekumursekarang(id) as umur'))->get();
        //echo "$func";
        return view('bintangs.function1', compact('funcs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function function2()
    {
        $funcs = DB::table('anggotas')->select(DB::raw('nama_anggota , banyakpinjam(id) as banyak_pinjam'))->get();
        //echo "$func";
        return view('bintangs.function2', compact('funcs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function procedure1input()
    {
        return view('bintangs.procedure1input');
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
        $procs = DB::select('call tidakpinjam()');
        
        return view('bintangs.procedure2', compact('procs'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join1()
    {
        $joins = DB::select('SELECT judul, tanggal_pinjam, tanggal_pengembalian FROM 
        (SELECT judul, tanggal_pinjam, tanggal_kembali, tp.id AS idpinjam 
        FROM dipinjams dp JOIN transpims tp ON dp.id_pinjam = tp.id 
        JOIN bukus b ON b.id= dp.id_buku) AS t 
        LEFT JOIN transkems tk ON t.idpinjam = tk.id_pinjam');
        
        return view('bintangs.join1', compact('joins'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function join2()
    {
        $joins = DB::select('SELECT nama_anggota AS nama, judul FROM 
        dipinjams dp JOIN transpims tp ON dp.id_pinjam = tp.id
        JOIN anggotas a ON a.id = tp.id_anggota
        JOIN bukus b ON b.id = dp.id_buku;');
        
        return view('bintangs.join2', compact('joins'));
        //return view('bintangs.view1', ['views' => $views]);
    }

    public function index()
    {
        
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
