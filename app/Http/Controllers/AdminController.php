<?php
namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
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