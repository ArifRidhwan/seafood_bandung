<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::All();

        return view('menu.index');
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
        // $order = new Order;
        //         $menu->menu = $request->menu;
        //         $menu->harga = $request->harga;
        //         # Foto
        //         if ($request->hasFile('foto')) {
        //             $file = $request->file('foto');
        //             $path = public_path() . '/assets/menu_img/';
        //             $filename ='_' . $file->getClientOriginalName();
        //             $upload = $file->move($path, $filename);
        //             $menu->foto = $filename;
        //         }
        //         $menu->save();
        //         // toastr()->success('Galley Foto berhasil Dibuat!');

        //         Session::flash("flash_notification", [
        //             "level" => "success",
        //             "message" => "Menu Foto <b>$menu->menu</b> berhasil Ditambahkan!"
        //             ]);
        //             return redirect()->route('menu.index');
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
