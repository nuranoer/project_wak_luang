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
                        <div class="product col-md-4 col-sm-6 sf-dress">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                    <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
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
                                    <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                    <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
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

                        <div class="product col-md-4 col-sm-6 sf-pants">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                    <div class="product-price">$39.99</div>
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

                        <div class="product col-md-4 col-sm-6 sf-shoes">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                    <div class="product-price">$49</div>
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

                        <div class="product col-md-4 col-sm-6 sf-dress">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                    <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                    <div class="product-price">$19.95</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 sf-sunglasses">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
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
                                    <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                    <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
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

                        <div class="product col-md-4 col-sm-6 sf-tshirts">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                    <div class="product-price">$9.99</div>
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

                        <div class="product col-md-4 col-sm-6 sf-watches">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                    <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                    <div class="product-price">$129.99</div>
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

                        <div class="product col-md-4 col-sm-6 sf-shoes">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                    <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
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
                                    <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                    <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 sf-dress">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                    <div class="product-price">$39.49</div>
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

                        <div class="product col-md-4 col-sm-6 sf-pants">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                    <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
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
                                    <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                    <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
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

                        <div class="product col-md-4 col-sm-6 sf-sunglasses">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                    <div class="product-price">$13.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 sf-tshirts">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                    <div class="product-price">$11.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

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

                        <div class="widget widget-filter-links">

                            <h4>Sort By</h4>
                            <ul class="shop-sorting ps-2">
                                <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
                                <li><a href="#" data-sort-by="name">Name</a></li>
                                <li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
                                <li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
                            </ul>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection