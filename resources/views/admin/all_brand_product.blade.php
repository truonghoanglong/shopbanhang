@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
        Liệt Kê Thương Hiệu Sản Phẩm
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
              
              <th>Tên Thương Hiệu</th>
              <th>Hiển Thị</th>
              <th>Sửa/Xóa</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_brand_product as $key => $brand_pro)
            <tr>
              
              <td>{{$brand_pro -> brand_name}}</td>
              <td><span class="text-ellipsis">
                    <?php
                      if($brand_pro->brand_status == 0){
                    ?>
                      <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}" class="dis-like">🔴</a>
                    <?php
                      }else{
                    ?>
                      <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}" class="like">🟢</a>
                    <?php
                    }
                    ?>
                  
              </span></td>

              <td>
                <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active edit" ><i class='bx bx-pencil'></i></a>
                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục sản phẩm')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="delete"><i class='bx bx-x' ></i></a>
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