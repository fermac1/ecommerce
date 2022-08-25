@extends('product_layout')

@section('content')
f
    <!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Order History</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-9">
					<h2 class="title">Order History</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-center">Order ID</td>
									<td class="text-center">Qty</td>
									<td class="text-center">Status</td>
									<td class="text-center">Date Added</td>
									<td class="text-right">Total</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
                                @foreach ($data as $item)
								<tr>
									<td class="text-center">
										<a href="product.html"><img width="85" class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="{{ asset('frontend/image/demo/shop/product/'.$item->product->image1 ) }}">
										</a>
									</td>
									<td class="text-left"><a href="product.html">{{ $item->product->name }}</a>
									</td>
									<td class="text-center">{{ $item->order_id }}</td>
									<td class="text-center">{{ $item->qty }}</td>
									<td class="text-center">Shipped</td>
									<td class="text-center">21/06/2016</td>
									<td class="text-right">${{ $item->price }}</td>
									<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{ url('order_info/'.$item->prod_id) }}" data-original-title="View"><i class="fa fa-eye"></i></a>
									</td>
								</tr>
                                @endforeach
							
							</tbody>
						</table>
					</div>

				</div>
				<!--Middle Part End-->
				<!--Right Part Start -->
				<aside class="col-sm-3 hidden-xs" id="column-right">
					<h2 class="subtitle">Account</h2>
					<div class="list-group">
						<ul class="list-item">
							<li><a href="login.html">Login</a>
							</li>
							<li><a href="register.html">Register</a>
							</li>
							<li><a href="#">Forgotten Password</a>
							</li>
							<li><a href="#">My Account</a>
							</li>
							<li><a href="#">Address Books</a>
							</li>
							<li><a href="wishlist.html">Wish List</a>
							</li>
							<li><a href="{{ url('order_history') }}">Order History</a>
							</li>
							<li><a href="#">Downloads</a>
							</li>
							<li><a href="#">Reward Points</a>
							</li>
							<li><a href="#">Returns</a>
							</li>
							<li><a href="#">Transactions</a>
							</li>
							<li><a href="#">Newsletter</a>
							</li>
							<li><a href="#">Recurring payments</a>
							</li>
						</ul>
					</div>			
				</aside>
				<!--Right Part End -->
			</div>
		</div>
		<!-- //Main Container -->
@endsection