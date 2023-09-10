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

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:produk',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'tag' => 'nullable|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan jenis gambar yang diperbolehkan
        ]);

        // Code untuk menyimpan data ke database
        // Contoh:
        $produk = new Produk;
        $produk->nama_barang = $request->nama_barang;
        $produk->slug = $request->slug;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->tag = $request->tag;
        $produk->deskripsi = $request->deskripsi;

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/produk'), $gambarName);
            $produk->gambar = $gambarName;
        }

        $produk->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }


    public function hapus($id)
    {
        try {
            // Gantilah 'Item' dengan model yang sesuai
            $produk = Produk::findOrFail($id);
            $produk->delete();

            return response()->json(['message' => 'Item berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus item'], 500);
        }
    }

}

?>