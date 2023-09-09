<?php
namespace App\Http\Controllers;

use App\Models\Produk;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends BaseController
{

    public function login_page()
    {
        return view('admin.auth.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/admin/dashboard');
        } else {
            Session::flash('alert', [
                'type' => 'danger',
                'message' => 'Email atau Password anda salah! Silakan cek kembali!',
            ]);
            return redirect('/admin/login');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function index()
    {
        $produk = Produk::all();

        return view('admin.produk.index', [
            'produk' => $produk
        ]);
    }
}

?>