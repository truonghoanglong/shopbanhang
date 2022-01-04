@extends('admin_layout')
@section('admin_content')
<link href="{{asset('public/backend/css/add-category.css')}}" rel="stylesheet">
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3 style="color:rgb(79,146,255)">Thêm Danh Mục Sản Phẩm</h3>
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label style="margin-top:50px" for="exampleInputEmail1"><h4>Tên Danh Mục</h4></label>
                            <input type="text" required class="form-control" name="categry_product_name" placeholder="Danh Mục Sản Phẩm">
                        </div>

                        <div class="form-group">
                            <label style="margin-top:50px" for="exampleInputPassword1"><h4>Mô Tả Danh Mục</h4></label>
                            <textarea name="categry_product_desc" required cols="55" rows="7"placeholder="Mô Tả Danh Mục"></textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        
                        
                        <div class="form-group">
                            <label style="margin-top:50px"><h4>Hiển Thị</h4></label>
                            <select class="anhien" name="category_product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button style="width:150px; background:rgb(79,146,255)" type="submit" class="submit">Thêm Danh Mục</button> <br> <br> <br> <br> 
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