<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master_tenaga_asing;

use App\Instansi;

class Master_tenaga_faskerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenagas = Master_tenaga_asing::where('status','3')->latest()->paginate(5);

        $instansis = Instansi::all();

        return view('mitra.Fasker.Tenaga_asing.master_tenaga_asing',['tenagas' => $tenagas,'instansis'=>$instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        $instansis = Instansi::all();

        return view('mitra.Fasker.Tenaga_asing.edit_master_tenaga',['tenaga' => $tenaga, 'instansis' => $instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        $tenaga->update([
            'status_keaktifan' => $request -> status_keaktifan
        ]);

        return redirect('/master-tenaga-asing')->with('sukses','Data Berhasil di Update');
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
