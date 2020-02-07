<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use Session;

class GalleryController extends Controller
{
    public function index(){
        $foto= Gallery::all();
        $user= User::count();
        $gallery = Gallery::count();
        return view('gallery.index',compact('user','gallery','foto'));


    }


    public function edit($id){
        $foto= Gallery::findOrFail($id);
        $user= User::count();
        $gallery = Gallery::count();
        return view ('gallery.edit',compact('user','gallery','foto'));
    }


    public function update(Request $request, $id){
        $foto= Gallery::findOrFail($id);
        $foto->nama_foto = $request->nama_foto;
        $foto->desc_foto = $request->desc_foto;
        if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $path = public_path() . '/assets/img/';
                    $filename ='_' . $file->getClientOriginalName();
                    $upload = $file->move($path, $filename);
                    $foto->foto = $filename;
                }
                $foto->save();
                Session::flash("flash_notification", [
           "level" => "success",
           "message" => "Foto <b>$foto->nama_foto</b> berhasil diedit!"
                   ]);

                // toastr()->success('Galley Foto berhasil Dibuat!');
                 return redirect()->route('gallery.index');
                }
    //     $user= User::count();
    //     $gallery = Gallery::count();
    //     return view ('gallery.index',compact ('user','gallery','foto'));
    // }

    public function store(Request $request)
    {

                $foto = new Gallery;
                $foto->nama_foto = $request->nama_foto;
                $foto->desc_foto = $request->desc_foto;
                # Foto
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $path = public_path() . '/assets/img/';
                    $filename ='_' . $file->getClientOriginalName();
                    $upload = $file->move($path, $filename);
                    $foto->foto = $filename;
                }
                $foto->save();
                // toastr()->success('Galley Foto berhasil Dibuat!');
                 return redirect()->route('gallery.index');
    }
        // $request->validate([
        //     'judul' => 'required|unique:artikels',
        //     'konten' => 'required|min:50',
        //     'foto' => 'required|mimes:jpeg.jpg.png.gif|required|max:2048',
        //     'kategori' => 'required',
        //     'tag' => 'required'
        // ]);
        // $artikel->tag()->attach($request->tag);
        // $artikel->negara()->attach($request->negara);
        //

}
