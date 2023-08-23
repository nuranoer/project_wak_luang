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
    public function motif_pashminajati()
    {
        $slug = 'batik-pashmina-ecoprint-jati';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('pashminajati', [
            'produk' => $produk
        ]);
    }
    public function motif_ecoprintjati1()
    {
        $slug = 'batik-ecoprint-jati-1';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('ecoprintjati1', [
            'produk' => $produk
        ]);
    }
    public function motif_ecoprintjati2()
    {
        $slug = 'batik-ecoprint-jati-2';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('ecoprintjati2', [
            'produk' => $produk
        ]);
    }
}
