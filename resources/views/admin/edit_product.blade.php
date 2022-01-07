@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3 style="color:rgb(79,146,255)">Cập Nhật Sản Phẩm Sản Phẩm</h3>
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    @foreach($edit_product as $key => $pro)
                    <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" name="product_name" value="{{$pro->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" name="product_price" value="{{$pro->product_price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                            <input type="file" class="form-control" name="product_image">
                            <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100px" width="100px" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                            <textarea style="resize:none" name="product_desc" cols="55" rows="7" >{{$pro->product_desc}}</textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                            <textarea style="resize:none" name="product_content" cols="55" rows="7">{{$pro->product_content}}</textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        <div class="form-group">
                            <label>Danh Mục Sản Phẩm</label>
                            <select class="anhien" name="product_cate">
                                @foreach($cate_product as $key => $cate)
                                    @if($cate->category_id == $pro->category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @else
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Thương Hiệu Sản Phẩm</label>
                            <select class="anhien" name="product_brand">

                                @foreach($brand_product as $key => $brand)
                                    @if($cate->category_id == $pro->category_id)
                                        <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                    @else
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Hiển Thị</label>
                            <select class="anhien" name="product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button style="width:150px; background:rgb(79,146,255)" type="submit" class="submit" type="submit" class="submit" name="add_product">Cập Nhật Sản Phẩm</button> <br> <br> <br> <br> 
                        <?php 
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
					    ?> 
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>
@endsection