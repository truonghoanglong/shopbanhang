@extends('admin_layout')
@section('admin_content')
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
              <th>Địa Chỉ</th>
              
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
            <tr>
            
              <th>Tên Sản Phẩm</th>
              <th>Số Lượng</th>
              <th>Giá</th>
              <th>Tổng Tiền</th>
             
              
            
            </tr>
          </thead>
          <tbody>
            
            <tr>
             
              <td>{{$order_by_id->product_name}}</td>
              <td>{{$order_by_id->product_sales_quanlity}}</td>
              <td>{{$order_by_id->product_price}}</td>
              <td>{{$order_by_id->order_total}}</td>
            </tr>

              
           
          </tbody>
        </table>
      </div>
      
    </div>
</div>
 
   <!-- footer -->
<br> <br>



@endsection 