@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Thương Hiệu Sản Phẩm
                </header>
                <div class="panel-body">
                   
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                            <input type="text" class="form-control" name="brand_product_name" placeholder="Danh Mục Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Thương Hiệu</label>
                            <textarea name="brand_product_desc" cols="55" rows="7"placeholder="Mô Tả Thương Hiệu"></textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>
                        
                        <div class="form-group">
                            <label>Hiển Thị</label>
                            <select class="anhien" name="brand_product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="submit">Thêm Thương Hiệu</button> <br> <br> <br> <br> 
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