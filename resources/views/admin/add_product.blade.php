@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3 style="color:rgb(79,146,255)">Thêm Sản Phẩm</h3>
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1"><h4>Tên Sản Phẩm</h4></label>
                            <input type="text" required class="form-control" name="product_name" placeholder="Tên Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><h4>Giá Sản Phẩm</h4></label>
                            <input type="text" required class="form-control" name="product_price" placeholder="Giá Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><h4>Hình Ảnh Sản Phẩm</h4></label>
                            <input type="file" required class="form-control" name="product_image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><h4>Mô Tả Sản Phẩm</h4></label>
                            <textarea style="resize:none" required name="product_desc" cols="55" rows="7"placeholder="Mô Tả Sản Phẩm"></textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"><h4>Nội Dung Sản Phẩm</h4></label>
                            <textarea style="resize:none" required name="product_content" cols="55" rows="7"placeholder="Nội Dung Sản Phẩm"></textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        <div class="form-group">
                            <label><h4>Danh Mục Sản Phẩm</h4></label>
                            <select class="anhien" name="product_cate">
                                @foreach($cate_product as $key => $cate)

                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                               
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label><h4>Thương Hiệu Sản Phẩm</h4></label>
                            <select class="anhien" name="product_brand">

                                @foreach($brand_product as $key => $brand)

                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label><h4>Hiển Thị</h4></label>
                            <select class="anhien" name="product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button style="width:150px; background:rgb(79,146,255)" type="submit" class="submit" name="add_product">Thêm Sản Phẩm</button> <br> <br> <br> <br> 
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