@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Tin Tức
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/save-blog')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiều Đề</label>
                            <input type="text" class="form-control" name="blog_title" placeholder="Tiều Đề ">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tin Tức</label>
                            <textarea name="blog_content" cols="55" rows="7"placeholder="Nội dung...."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình Ảnh</label>
                            <input type="file" class="form-control" name="blog_image">
                        </div>
                        <div class="form-group">
                            <label>Hiển Thị</label>
                            <select class="anhien" name="blog_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="submit">Thêm Tin Tức</button> <br> <br> <br> <br> 
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