@extends('product_layout')

@section('content')
@foreach ($products as $product)         

<div class="product-layout  col-md-3 col-sm-6 col-xs-12">
    <div class="product-item-container">
        <div class="left-block">
            <a href="{{ url('product/'. $product->slug)}}">
            <div class="product-image-container lazy second_img ">
                <img data-src="{{ asset('frontend/image/demo/shop/product/'. $product->image1) }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="{{ $product->name }}&quot;" class="img-1 img-responsive" />
                <img data-src="{{ asset('frontend/image/demo/shop/product/'. $product->image2) }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="{{ $product->name }}&quot;" class="img-2 img-responsive" />
            </div>
            </a>
            <!--Sale Label-->
            <span class="label label-sale">{{ $product->label }}</span>
            <!--full quick view block-->
            {{-- <div class="countdown_box">
                <div class="countdown_inner">
                    <div class="defaultCountdown-30"></div>
                </div>
            </div> --}}
        </div>
        
        <div class="right-block">
            <div class="caption">
                <h4><a href="{{ url('product/'. $product->slug)}}">{{ $product->name }}&quot;</a></h4>		
                <div class="ratings">
                    <div class="rating-box">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                    </div>
                </div>
                                    
                <div class="price">
                    <span class="price-new">${{ $product->new_price }}</span> 
                    {{-- <span class="price-old">${{ $product->old_price }}</span>		  --}}
                    <span class="label label-percent">{{ $product->discount }}</span>    
                </div>
                <div class="description item-desc hidden">
                    <p>{{ $product->description }} </p>
                </div>
            </div>
        </div><!-- right block -->
        <div class="button-group">
            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
            <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
            <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
         </div>
    </div>
</div>
@endforeach
@endsection