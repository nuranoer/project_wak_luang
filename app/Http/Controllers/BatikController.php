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
    public function motif_3warna()
    {
        $slug = 'batik-motif-sulur-3-warna';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('batikmotif3warna', [
            'produk' => $produk
        ]);
    }
    public function motif_bungagepyok()
    {
        $slug = 'batik-tulis-bunga-gepyok';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('batikbungagepyok', [
            'produk' => $produk
        ]);
    }
    public function motif_katun()
    {
        $slug = 'batik-tulis-bunga-katun';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('batiktulisbungakatun', [
            'produk' => $produk
        ]);
    }
    public function pashmina_maoni()
    {
        $slug = 'batik-pashmina-ecoprint-maoni';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('pashminamaoni', [
            'produk' => $produk
        ]);
    }
    public function pashmina_secang()
    {
        $slug = 'batik-pashmina-ecoprint-secang';
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return view('pashminasecang', [
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
