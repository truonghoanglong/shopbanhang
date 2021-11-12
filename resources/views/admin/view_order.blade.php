@extends('admin_layout')
@section('admin_content')

<link href="{{asset('public/frontend/css/view_order.css')}}" rel="stylesheet">

<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
       Thông Tin Người Mua Hàng
      </div>

      <div class="table-responsive">
        <?php 
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message',null);
        }
        ?> 
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              
              <th>Tên Người Mua</th>
              <th>Số Điện Thoại</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
             
              <td>{{$order_by_id->customer_name}}</td>
              <td>{{$order_by_id->customer_phone}}</td>

              
           
          </tbody>
        </table>
      </div>
      
    </div>
</div>

<br> <br>
<div class="table-agile-info">
  <div class="">
    <div class="panel-heading">
      Thông Tin Vận Chuyển
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
            
            <th>Tên Người Vận Chuyển</th>
            <th>Địa Chỉ</th>
            <th>Số Điên Thoại</th>
            
          </tr>
        </thead>
        <tbody>
          
          <tr>
         
            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
            <td>{{$order_by_id->shipping_phone}}</td>

            
        </tbody>
      </table>
    </div>
    
  </div>
</div>

<br> <br>
<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
       Liệt Kê Chi Tiết Đơn Hàng
      </div>

      <div class="table-responsive">
        <?php 
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message',null);
        }
        ?> 
        <table class="table table-striped b-t b-light">
          <thead>
            <tr id="tren">
              <th class="td3 td33" >Tên Sản Phẩm</th>
              <th class="td3" >Số Lượng</th>
              <th class="td3" >Giá</th>
              <th class="td3" >Tổng Tiền</th>
            </tr>
          </thead>
          <tbody>
            
            <tr id="duoi">
             
              <td class="td3 td33">{{$order_by_id->product_name}}</td>
              <td class="td3">{{$order_by_id->product_sales_quanlity}}</td>
              <td class="td3">{{$order_by_id->product_price}}</td>
              <td class="td3">{{$order_by_id->order_total}}</td>
            </tr>

              
           
          </tbody>
        </table>
      </div>
      
    </div>
</div>
 
   <!-- footer -->
<br> <br>




@endsection 