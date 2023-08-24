<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css')" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/style.css')" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/dark.css')" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/font-icons.css')" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/animate.css')" type="text/css" />
	<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')" type="text/css" />

	<link rel="stylesheet" href="{{ asset ('css/custom.css')" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Katalog Griya Batik Wakluang</title>

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
		</header>

        @yield('contents')

		<footer id="footer" class="dark" style="background: url('{{ asset ('images/footer-bg.jpg') }}') repeat fixed; background-size: 100% 100%;">
			

			<!-- Copyrights -->
			<div id="copyrights">
				<div class="container">

					<div class="row justify-content-between">
						<div class="col-12 text-center text-lg-start">
							<p class="fs-4">Griya Batik Wakluang</p>
							Banjaran Gang Carik No.54 - Kota Kediri, Jawa Timur <br>
							Copyrights &copy; 2023 All Rights Reserved.
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer>

	</div><!-- #wrapper end -->

	<div id="gotoTop" class="icon-angle-up"></div>

	<script src="{{ asset ('js/jquery.js')"></script>
	<script src="{{ asset ('js/plugins.min.js')"></script>

	<script src="{{ asset ('js/functions.js')"></script>

	<script>
		jQuery(document).ready( function($){
			$(window).on( 'pluginIsotopeReady', function(){
				$('#shop').isotope({
					transitionDuration: '0.65s',
					getSortData: {
						name: '.product-title',
						price_lh: function( itemElem ) {
							if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
								var price = $(itemElem).find('.product-price ins').text();
							} else {
								var price = $(itemElem).find('.product-price').text();
							}

							priceNum = price.split("$");

							return parseFloat( priceNum[1] );
						},
						price_hl: function( itemElem ) {
							if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
								var price = $(itemElem).find('.product-price ins').text();
							} else {
								var price = $(itemElem).find('.product-price').text();
							}

							priceNum = price.split("$");

							return parseFloat( priceNum[1] );
						}
					},
					sortAscending: {
						name: true,
						price_lh: true,
						price_hl: false
					}
				});

				$('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
					var element = $(this),
						elementFilter = element.children('a').attr('data-filter'),
						elementFilterContainer = element.parents('.custom-filter').attr('data-container');

					elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

					element.append('<span>'+ elementFilterCount +'</span>');

				});

				$('.shop-sorting li').click( function() {
					$('.shop-sorting').find('li').removeClass( 'active-filter' );
					$(this).addClass( 'active-filter' );
					var sortByValue = $(this).find('a').attr('data-sort-by');
					$('#shop').isotope({ sortBy: sortByValue });
					return false;
				});
			});
		});
	</script>

</body>
</html>