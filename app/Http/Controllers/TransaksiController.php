<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $transaksi = Transaksi::all();
        return view('page.transaksi.index', compact('transaksi','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tujuan      = Tujuan::all();
        return view('page.transaksi.form', compact('tujuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;

        $transaksi->nama      = $request->nama;
        $transaksi->tgl       = $request->tgl;
        $transaksi->hp        = $request->hp;
        $transaksi->alamat    = $request->alamat;
        $transaksi->tujuans_id    = $request->tujuan;
        $transaksi->save();

        return redirect('/transaksi');
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
        $tujuan      = Tujuan::all();
        $transaksi   = Transaksi::find($id);
        return view('page.transaksi.edit',compact('tujuan','transaksi'));
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
        $transaksi   = Transaksi::find($id);

        $transaksi->nama      = $request->nama;
        $transaksi->tgl       = $request->tgl;
        $transaksi->hp        = $request->hp;
        $transaksi->alamat    = $request->alamat;
        $transaksi->tujuans_id    = $request->tujuan;
        $transaksi->save();

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi  = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');
    }
}
