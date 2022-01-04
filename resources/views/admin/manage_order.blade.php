@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
        <h3 style="color:rgb(79,146,255)">Liệt Kê Đơn Hàng</h3>
      </div>
      <div class="row w3-res-tb">
        {{-- <div class="col-sm-5 m-b-xs"> --}}
          {{-- <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select> --}}
          {{-- <button class="btn btn-sm btn-default">Apply</button>                 --}}
        </div>
        <div class="col-sm-4">
        </div>
        {{-- <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div> --}}
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
              <th style="width:20px;">
              </th>
              <th>Tên Người Đặt Hàng</th>
              <th>Tổng Giá Tiền</th>
              {{-- <th>TÌnh Trạng Đơn Hàng</th> --}}
              <th>Hiển Thị Chi Tiết</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_order as $key => $order)
            <tr>
              <td><label class="i-checks m-b-none"><input type="hidden" name="post[]"><i></i></label></td>
              <td>{{$order -> customer_name}}</td>
              <td>{{$order -> order_total}}</td>
              {{-- <td>{{$order -> order_status}}</td> --}}
              

              <td>
                <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active edit" ><i style="margin-left:60px" class='bx bxs-copy-alt'></i></a>
                {{-- <a onclick="return confirm('Bạn có chắc muốn xóa đơn hàng không')" href="{{URL::to('/delete-order/'.$order->order_id)}}" class="delete"><i class='bx bx-x' ></i></a> --}}
              </td>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
</div>
@endsection 

