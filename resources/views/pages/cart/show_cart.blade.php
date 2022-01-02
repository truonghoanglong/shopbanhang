<link href="{{('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/price-range.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/animate.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/main.css')}}" rel="stylesheet">
<link href="{{('public/frontend/css/responsive.css')}}" rel="stylesheet">
@extends('layout')
@section('content')


<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Trang Chủ</a></li>
              <li class="active">Giỏ hàng của bạn</li>
            </ol>
        </div>
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
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="50" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                            <p>Sản phẩm</p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price,0). ' VND'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                                {{csrf_field()}}
                                
                                <input class="cart_quantity_input" style="width:100px; margin-right:10px" type="text" name="cart_quantity" value="{{$v_content->qty}}" >

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
                        <td class="cart_delete" style="margin-right: 20px">
                            <a style="background: #eb2626" class="cart_quantity_delete" href="{{URL::to('delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->



<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Thanh toán tại đây</h3>
            <p>Hãy chuẩn bị tiền để khi shipper tới để giao dịch được nhanh hơn bạn nhé !</p>
        </div>
        <div class="row">
            
            <div class="col-sm-8">
                <div class="total_area">
                    <ul>
                        <li>Tổng<span>{{Cart::total(0,',','.').' VND'}}</span></li>
                        {{-- <li>Thuế<span>0</span></li> --}}
                        <li>Phí vận chuyển<span>Free</span></li>
                        <li>Thành tiền <span>{{Cart::total(0,',','.').' VND'}}</span></li>
                    </ul>
                        {{-- <a class="btn btn-default update" href="">Update</a> --}}
                        

                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL) { 
                        ?>
                       <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh Toán</a>

                        <?php 
                        }else{
                        ?>
                           <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh Toán</a>

                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

@endsection