<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use App\Menu;
use App\LaporanPemesanan;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Session;

class LaporanPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto= Gallery::all();
        $user= User::count();
        $gallery = Gallery::count();
        $menus = Menu::count();
        $laporan = LaporanPemesanan::count();

         $laporanpemesanan= LaporanPemesanan::all();
        // $laporanpemesanan->$nomor_id_ktp = $request->nomor_id_ktp;
        // $laporanpemesanan->$nama_lengkap = $request->nama_lengkap;
        // $laporanpemesanan->$alamat = $request->alamat;
        // $laporanpemesanan->$antar_ambil_pesanan = $request->antar_ambi_pesanan;
        // $laporanpemesanan->$daftar_pesanan = $request->daftar_pesanan;

        return view('laporanpemesanan.index',compact('laporan','laporanpemesanan','menus','user','gallery','foto'));
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
