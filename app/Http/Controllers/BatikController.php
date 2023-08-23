<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BatikController extends BaseController
{
    public function motif_jaran()
    {
        $slug = 'batik-motif-jaranan';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('motifjaran', [
            'produk' => $produk
        ]);
    }
}
