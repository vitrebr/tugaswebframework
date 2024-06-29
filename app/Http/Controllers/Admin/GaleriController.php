<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller {
    public function index() {
        $galeris = Galeri::all();
        return view( 'admin.galeri', compact( 'galeris' ) );
    }

    public function input() {
        return view( 'admin.galeri_input' );
    }

    public function store( Request $request ) {
        $gambar = $request->file( 'gambar' )->store( 'public/gambar' );
        Galeri::create( [
            'judul' => $request->input( 'judul' ),
            'gambar' => $gambar,
            'deskripsi' => $request->input( 'deskripsi' ),
            'status' => 'Deactive',
        ] );
        return redirect()->route( 'admin.galeri.index' );
    }

    public function edit( $id ) {

        $galeri = Galeri::whereId( $id )->first();
        return view( 'admin.galeri_edit', compact( 'galeri' ) );
    }

    public function update( Request $request, $id ) {
        $galeri = Galeri::findOrFail( $id );

        if ( $request->hasFile( 'gambar' ) ) {
            if ($galeri->gambar && Storage::exists($galeri->gambar)) {
                Storage::delete( $galeri->gambar );
            }
            $path = $request->file( 'gambar' )->store( 'public/gambar' );
            $galeri->gambar = $path;
        }

        $galeri->judul = $request->input( 'judul' );
        $galeri->deskripsi = $request->input( 'deskripsi' );

        $galeri->save();

        return redirect()->route( 'admin.galeri.index' );
    }

    public function destroy( $id ) {
        Galeri::destroy( $id ); 
        return redirect()->route( 'admin.galeri.index' );
        $galeri->delete();
    }
}