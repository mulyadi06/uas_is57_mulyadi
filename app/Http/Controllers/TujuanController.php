<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $tujuan = Tujuan::all();
        return view('page.tujuan.index', compact('tujuan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.tujuan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Tujuan::class);
        $tujuan = new Tujuan;

        $tujuan->kd_tujuan    = $request->kode;
        $tujuan->dari         = $request->dari;
        $tujuan->tujuan       = $request->tujuan;
        $tujuan->harga        = $request->harga;
        $tujuan->save();

        return redirect('/tujuan');
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
        $tujuan = Tujuan::find($id);
        return view('page.tujuan.edit',compact('tujuan'));
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
        $tujuan = Tujuan::find($id);

        $tujuan->kd_tujuan    = $request->kode;
        $tujuan->dari         = $request->dari;
        $tujuan->tujuan       = $request->tujuan;
        $tujuan->harga        = $request->harga;
        $tujuan->save();

        return redirect('/tujuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tujuan  = Tujuan::find($id);
        $tujuan->delete();
        return redirect('/tujuan');
    }
}
