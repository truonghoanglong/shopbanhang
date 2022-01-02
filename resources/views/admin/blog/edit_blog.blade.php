@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Tin Tức
                </header>
                <div class="panel-body">
                   @foreach($edit_blog as $key => $edit_vla)
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/update-blog/'.$edit_vla->blog_id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiều Đề</label>
                            <input value="{{$edit_vla->blog_title}}" type="text" class="form-control" name="blog_title" placeholder="Tiều Đề ">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tin Tức</label>
                            <textarea name="blog_content" cols="55" rows="7"placeholder="Nội dung....">{{$edit_vla->blog_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Chi Tiết Tin Tức</label>
                            <textarea name="blog_content_desc" cols="55" rows="7"placeholder="Nội dung....">{{$edit_vla->blog_content_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><img src="{{URL::to('public/uploads/blog/'.$edit_vla->blog_image)}}" alt=""></label>
                            {{-- <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100px" width="100px" /> --}}
                            <input type="file" class="form-control" name="blog_image">
                        </div>
                       
                        
                        <button type="submit" class="submit">Cập Nhật Tin Tức</button> <br> <br> <br> <br> 
                        <?php 
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
					    ?> 
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
@endsection