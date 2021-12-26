@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="">
      <div class="panel-heading">
        Liệt Kê Tin Tức
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
              
              <th>Tiêu đề</th>
              <th>Hình ảnh</th>
              <th>Nội dung</th>
              <th>Hiển Thị</th>
              <th>Sửa/Xóa</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_blog as $key => $blog_pro)
            <tr>
              <td>{{$blog_pro -> blog_title}}</td>
              <td><img src="public/uploads/blog/{{$blog_pro -> blog_image}}" alt="" height="100" width="100"></td>
              <td>{{$blog_pro -> blog_content}}</td>
             
              <td><span class="text-ellipsis">
                    <?php
                      if($blog_pro->blog_status == 0){
                    ?>
                      <a href="{{URL::to('/unactive-blog/'.$blog_pro->blog_id)}}" class="dis-like">🔴</a>
                    <?php
                      }else{
                    ?>
                      <a href="{{URL::to('/active-blog/'.$blog_pro->blog_id)}}" class="like">🟢</a>
                    <?php
                    }
                    ?>
                  
              </span></td>

              <td>
                <a href="{{URL::to('/edit-blog/'.$blog_pro->blog_id)}}" class="active edit" ><i class='bx bx-pencil'></i></a>
                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục sản phẩm')" href="{{URL::to('/delete-blog/'.$blog_pro->blog_id)}}" class="delete"><i class='bx bx-x' ></i></a>
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