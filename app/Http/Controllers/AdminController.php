<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Str;
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
        // $request->validate([
        //     'nama_barang' => 'required|string|max:255',
        //     'slug' => 'required|string|max:255|unique:produk',
        //     'harga' => 'required|numeric',
        //     'kategori' => 'required|string|max:255',
        //     'tag' => 'nullable|string',
        //     'deskripsi' => 'required|string',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan jenis gambar yang diperbolehkan
        // ]);

        // // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/produk'), $gambarName);
            // $produk->gambar = $gambarName;
        }

        // Code untuk menyimpan data ke database
        $produk = new Produk();
        $produk->nama_barang = $request->nama_barang;
        $produk->slug = Str::slug($request->nama_barang);
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->tag = $request->tag;
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $gambarName;

        $produk->save();
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $id = $request->input('id');
        $nama_barang = $request->input('nama_barang');
        $slug = Str::slug($request->nama_barang);
        $harga = $request->input('harga');
        $kategori = $request->input('kategori');
        $tag = $request->input('tag');
        $deskripsi = $request->input('deskripsi');
        $gambar = $request->file('gambar');

        if ($request->hasFile('image')) {

            //upload new image
            $nama_gambar = uniqid() . '.' . $gambar->getClientOriginalExtension();
            $lokasi_gambar = public_path('images/produk/' . $nama_gambar);
            Produk::make($gambar)->resize(300, 200)->save($lokasi_gambar);

            Produk::delete('images/produk/'.$produk->image);

            $produk->update([
                'nama_barang' => $nama_barang,
                'slug' => $slug,
                'harga' => $harga,
                'kategori' => $kategori,
                'tag' => $tag,
                'deskripsi' => $deskripsi,
                'gambar' => $nama_gambar,
                // Tambahkan pembaruan data gambar produk jika diperlukan
            ]);

        } else {
            $produk->update([
                'nama_barang' => $nama_barang,
                'slug' => $slug,
                'harga' => $harga,
                'kategori' => $kategori,
                'tag' => $tag,
                'deskripsi' => $deskripsi,
                // Tambahkan pembaruan data gambar produk jika diperlukan
            ]);
        }
    
        // if ($gambar) {
        //     // Simpan gambar baru dengan nama yang unik
        //     $nama_gambar = uniqid() . '.' . $gambar->getClientOriginalExtension();
        //     $lokasi_gambar = public_path('images/produk/' . $nama_gambar);

        //     // Proses gambar menggunakan Intervention Image
        //     // Image::make($gambar)->resize(300, 200)->save($lokasi_gambar);

        //     // Perbarui kolom gambar di database
        //     Produk::where('id', $id)->update(['gambar' => $nama_gambar]);
        // }
        
        // // Lakukan pembaruan data produk berdasarkan ID
        // Produk::where('id', $id)->update([
        //     'nama_barang' => $nama_barang,
        //     'slug' => $slug,
        //     'harga' => $harga,
        //     'kategori' => $kategori,
        //     'tag' => $tag,
        //     'deskripsi' => $deskripsi,
        //     // Tambahkan pembaruan data gambar produk jika diperlukan
        // ]);

        // Tanggapi sukses jika berhasil memperbarui data produk
        return redirect()->back()->with('success', 'Produk berhasil diubah!');
        // return response()->json(['message' => 'Produk berhasil diperbarui']);
    }


    public function hapus($id)
    {
        try {
            // Gantilah 'Item' dengan model yang sesuai
            $produk = Produk::findOrFail($id);
            $produk->delete();
    
            return redirect()->back()->with('success', 'Item berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus item');
        }
    }
    
}

?>