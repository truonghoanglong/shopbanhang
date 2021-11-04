

@extends('layout')
@section('content')
<link href="{{asset('public/frontend/css/payment.css')}}" rel="stylesheet">


    

<div class="main">
    <div class="container">
        <h2>Xem lại gỏi hàng</h2>
        <div class="table-responsive cart_info">    
          <?php
          $content = Cart::content();
          ?>
          <table class="table table-condensed">
              <thead>
                  <tr class="cart_menu">
                      <td class="image">Hình ảnh</td>
                      <td class="description">Mô tả</td>
                      <td class="price">Giá</td>
                      <td class="quantity">Số lượng</td>
                      <td class="total">Tổng tiền</td>
                      <td class="total">Xóa sản phẩm</td>
                  </tr>
              </thead>
              <tbody>
                  @foreach($content as $v_content)
                  <tr>
                      <td class="cart_product">
                          <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="50" alt=""></a>
                      </td>
                      <td class="cart_description">
                          <h3><a href="">{{$v_content->name}}</a></h3>
                          <p>Sản phẩm</p>
                      </td>
                      <td class="cart_price">
                          <p>{{number_format($v_content->price,0). ' VND'}}</p>
                      </td>
                      <td class="cart_quantity">
                          <div class="cart_quantity_button">
                              <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                              {{csrf_field()}}
                              
                              <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" >
  
                              <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                              <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
  
                              </form>
                          </div>
                      </td>
                      <td class="cart_total">
                          <p class="cart_total_price">
                              <?php 
                                  $subtotal = $v_content->price * $v_content->qty;
                                  echo number_format($subtotal).' VND';
  
                              ?>
                          </p>
                      </td>
                      <td class="cart_delete">
                          <a class="cart_quantity_delete" href="{{URL::to('delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                      </td>
                  </tr>
                  @endforeach
                 
              </tbody>
          </table>
          <h4>Chọn hình thức thanh toán</h4>
         <form action="{{URL::to('/order-place')}}" method="post">
            {{csrf_field()}}
            <div class="payment-option">
                <span>
                    <label for=""><input type="checkbox" name="payment_option" value='1'>Trả bằng ATM</label>
                </span>
                <span>
                    <label for=""><input type="checkbox" name="payment_option" value='2'>Trả bằng tiền mặt</label>
                </span>
                <span>
                    <label for=""><input type="checkbox" name="payment_option" value='3'>Trả qua thẻ ghi nợ</label>
                </span> 
                <input type="submit" name="send-order-place" value="Đặt Hàng" class="sub">
            </div>
         </form>
      
      </div>
</div>



@endsection