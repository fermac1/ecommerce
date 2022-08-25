@extends('product_layout')

@section('content')
    <!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Checkout</a></li>
				
			</ul>
			
            <form action="{{ url('place-order') }}" method="post">
                @csrf
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
				  <h2 class="title">Checkout</h2>
				  <div class="row">
					<div class="col-sm-4">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
						</div>
						  <div class="panel-body">
								<div class="radio">
								<label>
									<input type="radio" value="register" name="account">
									Register Account
                                </label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" checked="checked" value="guest" name="account">
									Guest Checkout
                                </label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" value="returning" name="account">
									Returning Customer
                                </label>
								</div>
						  </div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="account">
								  <div class="form-group required">
									<label for="input-payment-firstname" class="control-label">First Name</label>
									<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" name="firstname" value="{{ Auth::user()->firstname }}">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-lastname" class="control-label">Last Name</label>
									<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="{{ Auth::user()->lastname }}" name="lastname">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-email" class="control-label">E-Mail</label>
									<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ Auth::user()->email   }}" name="email">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Telephone</label>
									<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ Auth::user()->telephone }}"name="telephone">
								  </div>
								
								</fieldset>
							</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="address" class="required">
							
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label">Address </label>
									<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address" value="{{ Auth::user()->address }}" name="address">
								  </div>
                                  @error('address')
                                  <p class="error">{{$message}}</p>
                                  @enderror
								
								  <div class="form-group required">
									<label for="input-payment-city" class="control-label">City</label>
									<input type="text" class="form-control" id="input-payment-city" placeholder="City" value="{{ Auth::user()->city }}" name="city">
								  </div>
                                  @error('city')
                                  <p class="error">{{$message}}</p>
                                  @enderror
							
								 
								  <div class="form-group required">
									<label for="">State</label>
                                    <input type="text" class="form-control" placeholder="Enter State" name="state" value="{{ Auth::user()->state }}">
								  </div>
                                  @error('state')
                                  <p class="error">{{$message}}</p>
                                  @enderror
								  
								</fieldset>
							  </div>
					  </div>
					</div>
					<div class="col-sm-8">
					  <div class="row">
						<div class="col-sm-6">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
							</div>
							  <div class="panel-body">
								<p>Please select the preferred shipping method to use on this order.</p>
								<div class="radio">
								  <label>
									<input type="radio" checked="checked" name="Free Shipping">
									Free Shipping - $0.00</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="Flat Shipping Rate">
									Flat Shipping Rate - $8.00</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="Per Item Shipping Rate">
									Per Item Shipping Rate - $150.00</label>
								</div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
							</div>
							  <div class="panel-body">
								<p>Please select the preferred payment method to use on this order.</p>
								<div class="radio">
								  <label>
									<input type="radio" checked="checked" name="Cash On Delivery">Cash On Delivery</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="Bank Transfer">Bank Transfer</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="Paypal">Paypal</label>
								</div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-ticket"></i> Use Coupon Code</h4>
							</div>
							  <div class="panel-body">
								<label for="input-coupon" class="col-sm-3 control-label">Enter coupon code</label>
								<div class="input-group">
								  <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
								  <span class="input-group-btn">
								  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
								  </span></div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-gift"></i> Use Gift Voucher</h4>
							</div>
							  <div class="panel-body">
								<label for="input-voucher" class="col-sm-3 control-label">Enter gift voucher code</label>
								<div class="input-group">
								  <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
								  <span class="input-group-btn">
								  <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
								  </span> </div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
							</div>
							  <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<td class="text-center">Image</td>
										<td class="text-left">Product Name</td>
										<td class="text-left">Quantity</td>
										<td class="text-right">Unit Price</td>
										<td class="text-right">Total</td>
									  </tr>
									</thead>
									<tbody>
                                        <?php $total = 0; ?>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $infos)
                                        <?php $total += $infos['price'] * $infos['qty'] ; ?>
									  <tr>
										<td class="text-center"><a href="{{ url('product/'. $infos['name']) }}"><img width="60px" src="{{ asset('frontend/image/demo/shop/product/'.$infos['image1']) }}" alt="{{ $infos['name'] }}" title="{{ $infos['name'] }}" class="img-thumbnail"></a></td>
										<td class="text-left"><a href="product.html">{{ $infos['name'] }}</a></td>
										<td class="text-left"><div class="input-group btn-block" style="min-width: 100px;">
											<input type="text" name="qty" value="{{ $infos['qty']}}" size="1" class="form-control">
											<span class="input-group-btn">
                                                <button type="button" data-toggle="tooltip" title="Update" class="btn btn-primary update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger remove-from-cart" onClick="" data-id="{{ $id }}"><i class="fa fa-times-circle"></i></button>
											</span></div></td>
										<td class="text-right">${{ $infos['price'] }}</td>
                           
										<td class="text-right">${{$infos['price'] * $infos['qty']}}</td>
									  </tr>
                                    
                                          
                                      @endforeach
                                      @endif
									</tbody>
									<tfoot>
									  <tr>
										<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
										<td class="text-right">$750.00</td>
									  </tr>
									  <tr>
										<td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
										<td class="text-right">$5.00</td>
									  </tr>
									  <tr>
										<td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
										<td class="text-right">$4.00</td>
									  </tr>
									  <tr>
										<td class="text-right" colspan="4"><strong>VAT (20%):</strong></td>
										<td class="text-right">$151.00</td>
									  </tr>
									  <tr>
										<td class="text-right" colspan="4"><strong>Total:</strong></td>
										<td class="text-right">$910.00</td>
									  </tr>
									</tfoot>
								  </table>
								</div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
							</div>
							  <div class="panel-body">
								<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
								<br>
								<label class="control-label" for="confirm_agree">
								  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
								  <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
								<div class="buttons">
								  <div class="pull-right">
									<input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
								  </div>
								</div>
							  </div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!--Middle Part End -->
				
			</div>

            </form>
		</div>
		<!-- //Main Container -->

        <script type="text/javascript">
            $(".update-cart").click(function (e) {
               e.preventDefault();
               var ele = $(this);
                $.ajax({
                   url: '{{ url('update-cart') }}',
                   method: "patch",
                   data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), qty: ele.parents("tr").find(".qty").val()},
                   success: function (response) {
                       window.location.reload();
                   }
                });
            });
            $(".remove-from-cart").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>
    

@endsection