@extends('product_layout')

@section('content')
    	<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">My Wish List</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
					<h2 class="title">My Wish List</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Model</td>
									<td class="text-right">Stock</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Action</td>
								</tr>
							</thead>
							<tbody>
                                @if ($wishlist->count() > 0)
                                  @foreach ($wishlist as $item)
                                  <tr class="table-row">

									<td class="text-center">
										<a  href="{{ url('product/'. $item->product->name )}}"><img width="70px" src= "{{ asset('frontend/image/demo/shop/product/').'/'. $item->product->image1  }}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
										</a>
									</td>
									<td class="text-left"><a href="{{ url('product/'. $item->product->name )}}">{{ $item->name }}</a>
									</td>
									<td class="text-left">product 20</td>
                                    @if ($item->product->qty > 0)
									<td class="text-right">In Stock</td>  
                                    @else
                                    <td class="text-right">Out of Stock</td>    
                                    @endif
									<td class="text-right">
										<div class="price"> ${{ $item->product->new_price }} </div>
									</td>
									<td class="text-right">

                                        <input type="hidden" value="{{ $item->product->id }}" class="prod_id">

                                        @if ($item->product->qty > 0)
										<button class="btn btn-primary add-cart"
										title="" data-toggle="tooltip"
										type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
										</button>
                                        @else
                                        <button class="btn btn-primary add-cart"
										title="" data-toggle="tooltip"
										type="button" data-original-title="Add to Cart" disabled><i class="fa fa-shopping-cart"></i>
										</button>
                                        @endif

										<a class="btn btn-danger remove-wishlist" title="" data-toggle="tooltip" href="http://localhost/2.2.0.0-compiled/index.html?route=account/wishlist&amp;remove=48" data-id="{{ $item->product->id }}" data-original-title="Remove"><i class="fa fa-times"></i></a>

									</td>
								</tr>   
                                  @endforeach
								
                                @else
                                   <h4>There are no products in your wishlist</h4> 
                                @endif

							</tbody>
						</table>
					</div>
				</div>

				<!--Middle Part End-->
				
			</div>
		</div>
		<!-- //Main Container -->

        <script>
            
		$(".add-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
           var product_id = $(this).closest('.table-row').find('.prod_id').val();
		   var product_qty = $(this).closest('.table-row').find('.qty-input').val();
		   
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

          
        $(".remove-wishlist").click(function (e) {
            e.preventDefault();

            var product_id = $(this).closest('.table-row').find('.prod_id').val();

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-wishlist') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        'product_id':product_id
                        },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
        </script>
@endsection