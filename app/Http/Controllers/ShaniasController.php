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

    public function index($func1=NULL, $func2=NULL)
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
        $trigger1s = \DB::table('log_terlambat')->get();
        $trigger2s = \DB::table('log_rak')->get();
            
        return view('shanias.index', compact('view1s','view2s','join1s','join2s','trigger1s','trigger2s', 'func1', 'func2'));   
    }

    public function prosesData(Request $request){
        if ($request->has('id_rak')) {

            echo "disini 1";

            //handle form1
            $param1 = $request->id_rak;
            $func1s = \DB::select('SELECT cek_rak(?) as res',[$param1]);

            print_r($func1s[0]->res);
            $res = $func1s[0]->res;
    
            return ShaniasController::index($res, NULL);
        }
        if ($request->has('katagori_buku')) {
            echo("disini 2");

            $param2 = $request->katagori_buku;
            // print_r($param2);
            // echo(" beriku: ");
            $func2s = \DB::select('select pinjam_kategori(?) as res',[$param2]);
    
            // print_r($func1s);
            // echo"lol";
            // print_r($func2s);
            $res = $func2s[0]->res;
            // print_r($res);
            return ShaniasController::index(NULL, $res);
        }
    }

    public function func1(Request $request)
    {
        // print_r($request->id_rak);
        $param1 = $request->id_rak;
        $func1s = \DB::select('SELECT cek_rak(?) as res',[$param1]);

        print_r($func1s[0]->res);
        $res = $func1s[0]->res;
        // return \View::make('shanias.index')->with('resfunc1', $res);
        // return view('shanias.index', compact('res'));
        return ShaniasController::index($res, NULL);
    }

    public function func2(Request $request)
    {
        $param2 = $request->katagori_buku;
        // print_r($param2);
        // echo(" beriku: ");
        $func2s = \DB::select('select pinjam_kategori(?) as res',[$param2]);

        // print_r($func1s);
        // echo"lol";
        // print_r($func2s);
        $res = $func2s[0]->res;
        // print_r($res);
        return ShaniasController::index(NULL, $res);
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
