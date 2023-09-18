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
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;



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
        // // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/produk'), $gambarName);

            // Salin gambar ke folder kedua (images/produk/cut)
            $destinationPath = public_path('images/produk/cut');
            File::copy(public_path('images/produk') . '/' . $gambarName, $destinationPath . '/' . $gambarName);

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

        if ($request->hasFile('gambar')) {

            // Upload gambar baru
            $nama_gambar = uniqid() . '.' . $gambar->getClientOriginalExtension();
            $lokasi_gambar = public_path('images/produk/' . $nama_gambar);
            $gambar->move(public_path('images/produk'), $nama_gambar);

            // Salin gambar ke folder kedua (images/produk/cut)
            $destinationPath = public_path('images/produk/cut');
            File::copy(public_path('images/produk') . '/' . $nama_gambar, $destinationPath . '/' . $nama_gambar);


            // Resize gambar
            $image = Image::make($lokasi_gambar);
            $image->resize(300, 200); // Ganti ukuran sesuai yang Anda inginkan
            $image->save($lokasi_gambar);


            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                $path_gambar_lama = public_path('images/produk/' . $produk->gambar);
                if (file_exists($path_gambar_lama)) {
                    unlink($path_gambar_lama); // Menghapus gambar lama
                }
            }

            // Hapus gambar lama di folder images/produk/cut jika ada
            if ($produk->gambar) {
                $path_gambar_lama_cut = public_path('images/produk/cut/' . $produk->gambar);
                if (file_exists($path_gambar_lama_cut)) {
                    unlink($path_gambar_lama_cut); // Menghapus gambar lama di folder images/produk/cut
                }
            }

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

        // Tanggapi sukses jika berhasil memperbarui data produk
        return redirect()->back()->with('success', 'Produk berhasil diubah!');
        // return response()->json(['message' => 'Produk berhasil diperbarui']);
    }


    public function hapus($id)
    {
        try {
            // Temukan produk berdasarkan ID
            $produk = Produk::findOrFail($id);
    
            // Hapus gambar terkait jika ada
            if (!empty($produk->gambar)) {
                $gambarPath = public_path('images/produk/' . $produk->gambar);
    
                // Hapus gambar dari sistem file
                if (file_exists($gambarPath)) {
                    unlink($gambarPath);
                }
            }
            // Hapus gambar terkait jika ada di folder images/produk/cut
            if (!empty($produk->gambar)) {
                $gambarPathCut = public_path('images/produk/cut/' . $produk->gambar);

                // Hapus gambar dari sistem file
                if (file_exists($gambarPathCut)) {
                    unlink($gambarPathCut);
                }
            }

    
            // Hapus produk itu sendiri
            $produk->delete();
    
            return redirect()->back()->with('success', 'Item berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus item');
        }
    }
    
    
    
}

?>