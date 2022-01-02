
@extends('admin_layout')
@section('admin_content')
<link href="{{asset('public/frontend/css/view_order.css')}}" rel="stylesheet">


{{-- <div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
       <h3>Thông Tin Người Mua Hàng</h3>
      </div>

      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              
              <th>Tên Người Mua</th>
              <th>Số Điện Thoại</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($order_by_id as $v_content)
            <tr>         
                <td>{{$v_content->customer_name}}</td>
                <td>{{$v_content->customer_phone}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
</div> --}}





<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
       <h3>Liệt Kê Chi Tiết Đơn Hàng</h3>
      </div>

      <div class="table-responsive">
        <?php 
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message',null);
        }
        ?> 
        <table id="bang" class="table table-striped b-t b-light">
          <thead >
            <tr id="tren">
              <th class="td3 td33" >Tên Sản Phẩm</th>
              <th class="td3" >Số Lượng</th>
              <th class="td3" >Giá/Sp</th>
              <th class="td3" >Tổng Tiền</th>
            </tr>
          </thead>
          <tbody>

            @foreach($order_by_id as $v_content)
            <tr id="duoi">
              <td class="td3 td33">{{$v_content->product_name}}</td>
              <td class="td3">{{$v_content->product_sales_quanlity}}</td>
              <td class="td3">{{$v_content->product_price}}</td>
              <td class="td3">{{$v_content->order_total}}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      
    </div>
</div>
 
   <!-- footer -->

<div class="table-agile-info">
  <div class="">
    <div class="panel-heading">
      <h3>Thông Tin Vận Chuyển</h3>
    </div>
    <div class="row w3-res-tb">
      
       
      </div>
      <div class="col-sm-4">
      </div>
     
    </div>
    <div class="table-responsive">
     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên Người Nhận Hàng</th>
            <th>Địa Chỉ</th>
            <th>Số Điên Thoại</th>
            
          </tr>
        </thead>
        <tbody>
          
          <tr>
         
            <td>{{$v_content->shipping_name}}</td>
            <td>{{$v_content->shipping_address}}</td>
            <td>{{$v_content->shipping_phone}}</td>

            
        </tbody>
      </table>
    </div>
    
  </div>
</div>



@endsection 