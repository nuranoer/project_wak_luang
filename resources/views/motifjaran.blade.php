<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset ('css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Detail Batik Motif Jaranan</title>

</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">
		<header id="header" class="full-header shadow-lg" data-mobile-sticky="true">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="#" class="standard-logo">Griya Batik Wakluang</a>
							<a href="#" class="retina-logo display-4">Griya Batik Wakluang</a>
						</div>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

        <!-- content -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="row gutter-40 col-mb-80">
                        <div class="postcontent col-lg-12 order-lg-last">

                            <div class="single-product">
                                <div class="product">
                                    <div class="row gutter-40">

                                        <div class="col-md-6">
                                            
                                            <div class="product-image">
                                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap" data-lightbox="gallery">
                                                            <div class="slide" data-thumb="{{ asset('images/produk/' . $produk->gambar) }}"><a href="{{ asset('images/produk/' . $produk->gambar) }}' title="{{ $produk -> nama_barang }}" data-lightbox="gallery-item"><img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="{{ $produk -> nama_barang }}"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                            </div>

                                        </div>

                                        <div class="col-md-6 product-desc">

                                            <div class="product-title"><h2>{{ $produk -> nama_barang }}</h2></div>
                                            <div class="product-price"><h4>Rp. {{ $produk -> harga }}</h4></div>

                                            <div class="line"></div>

                                            <p>{{ $produk -> deskripsi }}</p>

                                            <div class="product-meta">
                                                <span class="posted_in">Category: <a href="#" rel="tag">{{ $produk -> kategori }}</a>.</span> &nbsp;&nbsp;
                                                <span class="tagged_as">Tags: {{ $produk -> tag }}</span>
                                            </div><!-- Product Single - Meta End -->

                                            <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                                                <div>
                                                    <a href="https://instagram.com/griyabatik_wakluang?igshid=MzRlODBiNWFlZA==" target="_blank" class="social-icon si-borderless si-instagram">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a>
                                                    <a href="https://wa.me/622141194103" target="_blank" class="social-icon si-borderless si-whatsapp">
                                                        <i class="icon-whatsapp"></i>
                                                        <i class="icon-whatsapp"></i>
                                                    </a>
                                                </div>
                                            </div>

											<div class="tabs clearfix mb-0 pt-6" id="tab-1">

                                                <ul class="tab-nav clearfix">
                                                    <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Deskripsi Produk</span></a></li>
                                                    <li><a href="#tabs-2"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Ulasan Produk</span></a></li>
                                                </ul>

                                                <div class="tab-container">

                                                    <div class="tab-content clearfix" id="tabs-1">
                                                        <p>{{ $produk -> deskripsi }}</p>
                                                    </div>
                                                    <div class="tab-content clearfix" id="tabs-2">

                                                        <div id="reviews" class="clearfix">

                                                            <ol class="commentlist clearfix">

                                                                <p>Belum ada ulasan.</p>

                                                            </ol>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- content -->

		<footer id="footer" class="dark" style="background: url('{{ asset ('images/footer-bg.jpg') }}') repeat fixed; background-size: 100% 100%;">
			

			<!-- Copyrights -->
			<div id="copyrights">
				<div class="container">

					<div class="row justify-content-between">
						<div class="col-12 text-center text-lg-start">
							<p class="fs-4">Griya Batik Wak Luang</p>
							Banjaran Gang Carik No.54 - Kota Kediri, Jawa Timur <br>
							Copyrights &copy; 2023 All Rights Reserved.
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer>

	</div><!-- #wrapper end -->

	<div id="gotoTop" class="icon-angle-up"></div>

	<script src="{{ asset ('js/jquery.js')}}"></script>
	<script src="{{ asset ('js/plugins.min.js')}}"></script>

	<script src="{{ asset ('js/functions.js')}}"></script>

</body>
</html>