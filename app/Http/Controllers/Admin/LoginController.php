<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authentication(Request $request)
    {
        // Proses otentikasi sederhana
        if ($_REQUEST['username'] === "vitrebr" && $_REQUEST['password'] === '1234567890') {
            // Mengarahkan ke halaman index setelah login berhasil
            return redirect()->route('admin.index');
        } else {
            // Mengarahkan kembali dengan p esan kesalahan jika login gagal
            return back();
        }
    }

    public function index() {
        return view('admin.index');
    }
}