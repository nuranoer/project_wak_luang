@extends('layout.app')

@section('contents')

<section id="page-title">
    <div class="container clearfix">
        <h1>Shop</h1>
        <span>Products with Filter Functionality</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Filters</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop Filter</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <div class="postcontent col-lg-9 order-lg-last">
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

                        <div class="product col-md-4 col-sm-6">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="/detail"><img src="images/shop/wakluang/baju1.jfif" alt="Atasan Batik"></a>
                                    <a href="/detail"><img src="images/shop/wakluang/baju3.jfif" alt="Atasan Batik"></a>
                                    <div class="sale-flash badge bg-secondary p-2">Out of Stock</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="/detail">Atasan Batik Wanita</a></h3></div>
                                    <div class="product-price"><del>Rp500.000</del> <ins>Rp475.000</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/wakluang/baju2.jfif" alt="Atasan Batik Pria"></a>
                                    <a href="#"><img src="images/shop/wakluang/baju4.jfif" alt="Atasan Batik Pria"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Atasan Batik Pria</a></h3></div>
                                    <div class="product-price">Rp300.000</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/wakluang/baju5.jfif" alt="Atasan Batik Couple"></a>
                                    <a href="#"><img src="images/shop/wakluang/baju6.jfif" alt="Atasan Batik Couple"></a>
                                    <div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Atasan Batik Couple</a></h3></div>
                                    <div class="product-price"><del>Rp500.000</del> <ins>Rp475.000</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/wakluang/baju7.jfif" alt="Atasan Batik Pria"></a>
                                    <a href="#"><img src="images/shop/wakluang/baju8.png" alt="Atasan Batik Pria"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Atasan Batik Pria</a></h3></div>
                                    <div class="product-price">Rp275.000</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">
                            <h4>Cari Produk</h4>
                            <form action="#" class="my-0">
                                <div class="input-group mx-auto">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="btn btn-secondary"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="widget widget-filter-links">

                            <h4>Select Category</h4>
                            <ul class="custom-filter ps-2" data-container="#shop" data-active-class="active-filter">
                                <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
                                <li><a href="#" data-filter=".sf-dress">Dress</a></li>
                                <li><a href="#" data-filter=".sf-tshirts">Tshirts</a></li>
                                <li><a href="#" data-filter=".sf-pants">Pants</a></li>
                                <li><a href="#" data-filter=".sf-sunglasses">Sunglasses</a></li>
                                <li><a href="#" data-filter=".sf-shoes">Shoes</a></li>
                                <li><a href="#" data-filter=".sf-watches">Watches</a></li>
                            </ul>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection