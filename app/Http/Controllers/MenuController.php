<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use App\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Session;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        $user = User::count();
        $gallery = Gallery::count();
        $menus = Menu::count();

        return view('menu.index',compact('user','gallery','menu','menus'));
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
                $menu = new Menu;
                $menu->menu = $request->menu;
                $menu->harga = $request->harga;
                # Foto
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $path = public_path() . '/assets/menu_img/';
                    $filename ='_' . $file->getClientOriginalName();
                    $upload = $file->move($path, $filename);
                    $menu->foto = $filename;
                }
                $menu->save();
                // toastr()->success('Galley Foto berhasil Dibuat!');

                Session::flash("flash_notification", [
                    "level" => "success",
                    "message" => "Menu Foto <b>$menu->menu</b> berhasil Ditambahkan!"
                    ]);
                    return redirect()->route('menu.index');
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
   public function edit($id){
        $menu= Menu::findOrFail($id);
        $user= User::count();
        $gallery = Gallery::count();
        $menus = Menu::count();
        return view ('menu.edit',compact('menu','user','gallery','foto'));
    }

     public function update(Request $request, $id){
        $menu= Menu::findOrFail($id);
        $menu->menu = $request->menu;
        $menu->harga = $request->harga;
        if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $path = public_path() . '/assets/menu_img/';
                    $filename ='_' . $file->getClientOriginalName();
                    $upload = $file->move($path, $filename);
                    $menu->foto = $filename;
                }
                $foto->save();
                Session::flash("flash_notification", [
           "level" => "success",
           "message" => "Foto <b>$foto->menu</b> berhasil Di Ubah!"
                   ]);

                // toastr()->success('Galley Foto berhasil Dibuat!');
                 return redirect()->route('menu.index');
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
