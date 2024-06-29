<?php

namespace App\Http\Controllers\Tamu;

use App\Models\f;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku_tamus = BukuTamu::orderBy('nama', 'asc')->paginate(10);
        return view('tamu.index', compact('buku_tamus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $f)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}