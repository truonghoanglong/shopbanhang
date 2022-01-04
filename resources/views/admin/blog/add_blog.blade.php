@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3 style="color:rgb(79,146,255)">Thêm tin tức</h3>
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/save-blog')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label  style="margin-top:20px" for="exampleInputEmail1"><h4>Tiều Đề</h4></label>
                            <input type="text" required class="form-control" name="blog_title" placeholder="Tiều Đề ">
                        </div>
                        
                        <div class="form-group">
                            <label  style="margin-top:20px" for="exampleInputPassword1"><h4>Nội Dung Tin Tức</h4></label>
                            <textarea required name="blog_content" cols="55" rows="7"placeholder="Nội dung...."></textarea>
                        </div>
                        <div class="form-group">
                            <label  style="margin-top:20px" for="exampleInputPassword1"><h4>Nội Dung Tin Tức Chi Tiết</h4></label>
                            <textarea required name="blog_content_desc" cols="55" rows="7"placeholder="Nội dung chi tiết...."></textarea>
                        </div>
                        <div class="form-group">
                            <label  style="margin-top:20px" for="exampleInputEmail1"><h4>Hình Ảnh</h4></label>
                            <input type="file" required class="form-control" name="blog_image">
                        </div>
                        <div class="form-group">
                            <label  style="margin-top:20px"><h4>Hiển Thị</h4></label>
                            <select class="anhien" name="blog_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button style="width:120px; background:rgb(79,146,255)" type="submit" class="submit">Thêm Tin Tức</button> <br> <br> <br> <br> 
                        <?php 
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
					    ?> 
                    </form>
                    </div>

                </div>
            </section>

    </div>
@endsection