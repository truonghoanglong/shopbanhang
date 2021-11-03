<link href="{{asset('public/frontend/css/show_checkout.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('layout')
@section('content')

<h2 class='title'>Thanh Toán</h2>
<p class='title'>Đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại giỏ hàng trước khi thanh toán</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Điền thông tin gửi hàng</h3>

            
                {{csrf_field()}}
                <label for="fname"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="fname" name="shipping_email" placeholder="@gmail.com">

                <label for="email"><i class="fa fa-user"></i> Họ Tên</label>
                <input type="text" id="email" name="shipping_name" placeholder="Hoàng Long">

                <label for="adr"><i class="fa fa-address-card-o"></i> Đại Chỉ</label>
                <input type="text" id="adr" name="shipping_address" placeholder="20 Bầu Tràm 1">
                
                <label for="city"><i class="fa fa-phone"></i> Phone</label>
                <input type="text" id="city" name="shipping_phone" placeholder="0961">

                <label for="city"><i class="fas fa-comment-dots"></i> Ghi chú đơn hàng</label>
                <textarea id="w3review" name="shipping_notes" placeholder="..." rows="4" cols="48"></textarea>

                <input type="submit" name="send-order" value="Gửi" class="btn">
                
          </div>

          

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            {{-- <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div> --}}
          </div>
          
        </div>

        <label>
          <input type="checkbox" checked="checked" name="send"> Shipping address same as billing
        </label>

        

      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>



@endsection