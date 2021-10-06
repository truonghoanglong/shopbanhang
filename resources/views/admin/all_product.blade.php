@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
        Liệt Kê Sản Phẩm
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
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Hình Ảnh Sản Phẩm Sản Phẩm</th>
              <th>Danh Mục </th>
              <th>Thương Hiệu<th>
              <th>Thương Hiệu<th>
              
              <th>Sửa/Xóa</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_product as $key => $pro)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$pro -> product_name}}</td>
              <td>{{$pro -> product_price}}</td>
              <td><img src="public/uploads/product/{{$pro -> product_image}}" height="100px" width="100px"></td>
              <td>{{$pro -> category_name}}</td>
              <td>{{$pro -> brand_name}}</td>

              <td><span class="text-ellipsis">
                    <?php
                      if($pro->product_status == 0){
                    ?>
                      <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}" class="dis-like">🔴</a>
                    <?php
                      }else{
                    ?>
                      <a href="{{URL::to('/active-product/'.$pro->product_id)}}" class="like">🟢</a>
                    <?php
                    }
                    ?>
                  
              </span></td>

              <td>
                <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active edit" ><i class='bx bx-pencil'></i></a>
                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục sản phẩm')" href="{{URL::to('/delete-brand-product/'.$pro->product_id)}}" class="delete"><i class='bx bx-x' ></i></a>
              </td>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  </section>
   <!-- footer -->
@endsection