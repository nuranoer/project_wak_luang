@extends('layout.app')

@section('contents')

<section id="page-title">
    <div class="container">
        <h1>Katalog Griya Batik "Wakluang"</h1>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <div class="postcontent col-lg-9 order-lg-last">
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
                    @foreach ( $produk as $p )
                    <div class="product col-md-4 col-sm-6">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="/{{ $p -> slug }}"><img src="{{ asset('images/produk/cut/' . $p->gambar) }}" alt="{{ $p -> nama_barang }}"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="/{{ $p -> slug }}">{{ $p-> nama_barang }}</a></h3></div>
                                <div class="product-price">{{ $p-> harga }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-filter-links">

                            <h4>Kategori</h4>
                            <ul class="custom-filter ps-2" data-container="#shop" data-active-class="active-filter">
                                <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
                                <li><a href="#" data-filter=".sf-Kain">Kain</a></li>
                                <li><a href="#" data-filter=".sf-Pashmina">Pashmina</a></li>
                            </ul>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection