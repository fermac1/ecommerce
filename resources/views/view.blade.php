@extends('product_layout')

@section('content')

{{-- <div class="container">

    <div class="row">
        <div class="col-sm-2">
            
            @if(session('cart'))
                <a href="{{ url('cart') }}" class="btn btn-primary  mt-3 mb-3 btn-block">

                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     Cart
                    <!-- this code count product of choose tha user choose -->

                    <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                </a>
        </div>
                      
      
        <div class="col-sm-4 text-center">
     
                @if(session('success'))
                    <p class="btn-success  mt-3 mb-3 btn-block session" style='padding: .375rem .75rem;'>
                      {{ session('success') }}
                    </p>
        </div>

                @endif
       <!-- if user dont choose any product -->
                @else
                      
                    <a href="" class="btn text-light bg-warning mt-3 mb-3" role="button">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cart Empty
                    </a> 

                    @endif
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$("a").click(function () {
		  $(".session").visibility(2);
		});
		  
		</script>
	
	<style>
	.session{
		visibility:hidden ;
		
	}
	</style> --}}
	
    <!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">{{ $products->category->name }}</a></li>
				<li><a href="#">{{ $products->name }}</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">
					
					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="content-product-left  col-sm-6 col-xs-12 ">
									<div id="thumb-slider-vertical" class="thumb-vertical-outer">
										<span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
										<span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
										<ul class="thumb-vertical">
											<li class="owl2-item">
												<a data-index="0" class="img thumbnail" data-image="image/demo/shop/product/1.png" title="Canon EOS 5D">
													<img src="{{ asset('frontend/image/demo/shop/product/' . $products->image1) }}" title="Canon EOS 5D" alt="Canon EOS 5D">
												</a>
											</li>
											<li class="owl2-item">
												<a data-index="1" class="img thumbnail " data-image="image/demo/shop/product/f9.jpg" title="Bint Beef">
													<img src="{{ asset('frontend/image/demo/shop/product/' . $products->image2 ) }}" title="Bint Beef" alt="Bint Beef">
												</a>
											</li>
										
										</ul>
										
										
									</div>
									<div class="large-image  vertical">
										<img itemprop="image" class="product-image-zoom" src="{{ asset('frontend/image/demo/shop/product/' . $products->image1 ) }}" data-zoom-image="image/demo/shop/product/1.png" title="Bint Beef" alt="Bint Beef">
									</div>
									<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
									
								</div>

								<div class="content-product-right col-sm-6 col-xs-12">
									<div class="title-product">
										<h1>{{ $products->name }}</h1>
									</div>
									<!-- Review ---->
									<div class="box-review form-group">
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>

										<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	| 
										<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
									</div>

									<div class="product-label form-group">
										@if ($products->qty > 0)
										<div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
										@else
										<div class="stock"><span>Availability:</span> <span class="status-stock">Out of Stock</span></div>
										@endif
										{{-- <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div> --}}
										<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
											<span class="price-new" itemprop="price">${{ $products->new_price }}</span>
											{{-- <span class="price-old">$122.00</span> --}}
										</div>
										
									</div>

									<div class="product-box-desc">
										<div class="inner-box-desc">
											<div class="price-tax"><span>Ex Tax:</span> $60.00</div>
											<div class="brand"><span>Brand:</span><a href="#">Apple</a>		</div>
											<div class="model"><span>Product Code:</span> Product 15</div>
											<div class="reward"><span>Reward Points:</span> 100</div>
										</div>
									</div>


									<div id="product">
										<h4>Available Options</h4>
										<div class="image_option_type form-group required">
											<label class="control-label">Colors</label>
											<ul class="product-options clearfix"id="input-option231">
												<li class="radio active">
													<label>
														<input class="image_radio" type="radio" name="option[231]" value="33"> <img src="image/demo/colors/blue.jpg"
														data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
														<label> </label>
													</label>
												</li>
												<li class="radio">
													<label>
														<input class="image_radio" type="radio" name="option[231]" value="34"> <img src="image/demo/colors/brown.jpg"
														data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
														<label> </label>
													</label>
												</li>
												<li class="radio">
													<label>
														<input class="image_radio" type="radio" name="option[231]" value="35"> <img src="image/demo/colors/green.jpg"
														data-original-title="green +$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
														<label> </label>
													</label>
												</li>
												<li class="selected-option">
												</li>
											</ul>
										</div>
										
										

										<div class="form-group box-info-product">
											<div class="option quantity">
												<input type="hidden" value="{{ $products->id }}" class="prod_id">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>Qty</label>
													<input class="form-control qty-input" type="text" name="qty"
													value="1">
													<input type="hidden" name="product_id" value="50">
													<span class="input-group-addon product_quantity_down">−</span>
													<span class="input-group-addon product_quantity_up">+</span>
												</div>
											</div>

										
											
											<div class="cart">
												{{-- <a href="{{ url('add-to-cart/'. $products->id) }}">Add to Cart --}}
												{{-- <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg " onclick="cart.add('42', '1');" data-original-title="Add to Cart"> --}}
												@if ($products->qty > 0)
												<input type="button" value="Add to Cart" class="add-cart" data-id="{{$products->id}}" data-name="{{$products->name}}" data-price="{{$products->price}}">
								
												@else
												<input type="button" value="Add to Cart" class="add-cart" data-id="{{$products->id}}" data-name="{{$products->name}}" data-price="{{$products->price}}"  disabled>
												{{-- </a> --}}
												@endif
											</div>
											
											
											<div class="add-to-links wish_comp">
												<ul class="blank list-inline">
													<li class="wishlist">
														<a class="icon addToWishlist" data-toggle="tooltip" title=""
														onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
														</a>
													</li>
													<li class="compare">
														<a class="icon" data-toggle="tooltip" title=""
														onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
														</a>
													</li>
												</ul>
											</div>

										</div>

									</div>
									<!-- end box info product -->
								</div>
							</div>
						</div>
					</div>
					<div class="bototm-detail">
						<div class="row">
							<div class="col-lg-3 col-md-4  col-xs-12">
								<div class="module releate-horizontal">
						            <h3 class="modtitle"><span>Related Products</span></h3>
						            <div class="releate-product ">
										<div class="product-item-container">
											
											@foreach ($related_products as $item)

											<div class="item-element clearfix">
												<div class="image">
													<img  src="{{ asset('frontend/image/demo/shop/product/'. $item->image1) }}"  title="{{ $item->name }}" class="img-1 img-responsive" />
												</div> 
												<div class="caption">
													
													<div class="ratings">
														  <div class="rating-box">
														  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														  </div>
													</div>
													<h4><a href="{{ url('product/'. $item->slug)}}">{{ $item->name }}</a></h4>
													<div class="price">
														<span class="price-new">${{ $item->new_price }}</span> 
														{{-- <span class="price-old">$142.00</span>		  --}}
													</div>
													
												</div>
										    </div>
											@endforeach
											
										   
										</div>
						            </div>
							    </div>

							</div>
							<div class="col-lg-9 col-md-8  col-xs-12">
								<!-- Product Tabs -->
								<div class="producttab ">
									<div class="tabsslider  col-xs-12">
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
										</ul>
										<div class="tab-content col-xs-12">
											<div id="tab-1" class="tab-pane fade active in">
												<p>Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.</p>
												<p>At vero eos et accusam et justo duo dolores	et ea rebum. Stet clita kasd gubergren,no sea takimata sanctus est Lorem ipsumdolor sit amet. Lorem ipsum dolor sitamet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. </p>
												<p><strong>Nemo enim ipsam voluptatem</strong></p>
												<ul class="des-custom">
													<li>100% Brand New.</li>
													<li>Fashion Cute Mini Finger Ring</li>
													<li>Contains 1 PCS</li>
													<li>Simple and easy</li>
												</ul>
												<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum uptatem accusantium doloremque laudantium, totam rem aperiam, eaque.</p>
												
											</div>
											<div id="tab-review" class="tab-pane fade">
												<form>
													<div id="review">
														<table class="table table-striped table-bordered">
															<tbody>
																<tr>
																	<td style="width: 50%;"><strong>Super Administrator</strong></td>
																	<td class="text-right">29/07/2015</td>
																</tr>
																<tr>
																	<td colspan="2">
																		<p>Best this product opencart</p>
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<div class="text-right"></div>
													</div>
													<h2 id="review-title">Write a review</h2>
													<div class="contacts-form">
														<div class="form-group"> <span class="icon icon-user"></span>
															<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
														</div>
														<div class="form-group"> <span class="icon icon-bubbles-2"></span>
															<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
														</div> 
														<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>
														
														<div class="form-group">
														 <b>Rating</b> <span>Bad</span>&nbsp;
														<input type="radio" name="rating" value="1"> &nbsp;
														<input type="radio" name="rating"
														value="2"> &nbsp;
														<input type="radio" name="rating"
														value="3"> &nbsp;
														<input type="radio" name="rating"
														value="4"> &nbsp;
														<input type="radio" name="rating"
														value="5"> &nbsp;<span>Good</span>
														
														</div>
														<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
													</div>
												</form>
											</div>
											<div id="tab-4" class="tab-pane fade">
												<a href="#">Monitor</a>,
												<a href="#">Apple</a>				
											</div>
											<div id="tab-5" class="tab-pane fade">
												<table class="data-table" style="width: 100%;" border="1">
													<tbody>
													<tr>
													<td>Brand</td>
													<td><img  src="image/demo/shop/category/logo-client.png"  title="Apple Cinema 30&quot;" class="img-1 img-responsive" /></td>
													</tr>
													<tr>
													<td>History</td>
													<td>Color sit amet, consectetur adipiscing elit. In gravida pellentesque ligula, vel eleifend turpis blandit vel. Nam quis lorem ut mi mattis ullamcorper ac quis dui. Vestibulum et scelerisque ante, eu sodales mi. Nunc tincidunt tempus varius. Integer ante dolor, suscipit non faucibus a, scelerisque vitae sapien.</td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- //Product Tabs -->
								
							</div>
						</div>
					</div>
					
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

					<script type="text/javascript">
						$(document).ready(function() {

		$(".add-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
           var product_id = $(this).closest('.product-view').find('.prod_id').val();
		   var product_qty = $(this).closest('.product-view').find('.qty-input').val();
		   
		   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $.ajax({
               url: '{{ url('add-to-cart') }}',
               method: "post",
               data: {
				   		'product_id':product_id,
						'product_qty':product_qty,
			},
               success: function (response) {
				window.location=response.url;
               }
            });
        });
		
		$(".addToWishlist").click(function (e) {
           e.preventDefault();
          
           var product_id = $(this).closest('.product-view').find('.prod_id').val();
		   
		   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $.ajax({
               url: '{{ url('add-to-wishlist') }}',
               method: "post",
               data: {
				   		'product_id':product_id,
			},
               success: function (response) {
				alert(response.status);
               }
            });
        });

							// var zoomCollection = '.large-image img';
							// $( zoomCollection ).elevateZoom({
							// 	zoomType    : "inner",
							// 	lensSize    :"200",
							// 	easing:true,
							// 	gallery:'thumb-slider-vertical',
							// 	cursor: 'pointer',
							// 	galleryActiveClass: "active"
							// });
							// $('.large-image').magnificPopup({
							// 	items: [
							// 		{src: 'image/demo/shop/product/1.png' },
							// 		{src: 'image/demo/shop/product/f9.jpg' },
							// 		{src: 'image/demo/shop/product/2.png' },
							// 		{src: 'image/demo/shop/product/3.png' },
							// 		{src: 'image/demo/shop/product/j9.jpg' },
							// 	],
							// 	gallery: { enabled: true, preload: [0,2] },
							// 	type: 'image',
							// 	mainClass: 'mfp-fade',
							// 	callbacks: {
							// 		open: function() {
										
							// 			var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
							// 			var magnificPopup = $.magnificPopup.instance;
							// 			magnificPopup.goTo(activeIndex);
							// 		}
							// 	}
							// });
							// $("#thumb-slider-vertical .owl2-item").each(function() {
							// 	$(this).find("[data-index='0']").addClass('active');
							// });
							
							// $('.thumb-video').magnificPopup({
							//   type: 'iframe',
							//   iframe: {
							// 	patterns: {
							// 	   youtube: {
							// 		  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
							// 		  id: 'v=', // String that splits URL in a two parts, second part should be %id%
							// 		  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
							// 			},
							// 		}
							// 	}
							// });
							
							// $('.product-options li.radio').click(function(){
							// 	$(this).addClass(function() {
							// 		if($(this).hasClass("active")) return "";
							// 		return "active";
							// 	});
								
							// 	$(this).siblings("li").removeClass("active");
							// 	$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
							// });
							
							// var _isMobile = {
							//   iOS: function() {
							//    return navigator.userAgent.match(/iPhone/i);
							//   },
							//   any: function() {
							//    return (_isMobile.iOS());
							//   }
							// };
							
							// $(".thumb-vertical-outer .next-thumb").click(function () {
							// 	$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
							// });
			
							// $(".thumb-vertical-outer .prev-thumb").click(function () {
							// 	$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
							// });

							// $(".thumb-vertical-outer .thumb-vertical").lightSlider({
							// 	item: 4,
							// 	autoWidth: false,
							// 	vertical:true,
							// 	slideMargin: 7,
							// 	verticalHeight:425,
					        //     pager: false,
							// 	controls: true,
					        //     prevHtml: '<i class="fa fa-chevron-up"></i>',
					        //     nextHtml: '<i class="fa fa-chevron-down"></i>',
							// 	responsive: [
							// 		{
							// 			breakpoint: 1199,
							// 			settings: {
							// 				verticalHeight: 330,
							// 				item: 4,
							// 			}
							// 		},
							// 		{
							// 			breakpoint: 1024,
							// 			settings: {
							// 				verticalHeight: 235,
							// 				item: 2,
							// 				slideMargin: 5,
							// 			}
							// 		},
							// 		{
							// 			breakpoint: 768,
							// 			settings: {
							// 				verticalHeight: 340,
							// 				item: 3,
							// 			}
							// 		}
							// 		,
							// 		{
							// 			breakpoint: 480,
							// 			settings: {
							// 				verticalHeight: 100,
							// 				item: 1,
							// 			}
							// 		}
					
							// 	]
								
					        // });
			
							
							
							// // Product detial reviews button
							// $(".reviews_button,.write_review_button").click(function (){
							// 	var tabTop = $(".producttab").offset().top;
							// 	$("html, body").animate({ scrollTop:tabTop }, 1000);
							// });
						});
							
					</script>

					
				</div>
				
				
			</div>
			<!--Middle Part End-->
		</div>
		<!-- //Main Container -->
@endsection