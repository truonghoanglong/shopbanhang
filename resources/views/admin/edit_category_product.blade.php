@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Danh Mục Sản Phẩm
                </header>
                <div class="panel-body">
                   @foreach($edit_category_product as $key => $edit_value)
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" value="{{$edit_value->category_name}}" class="form-control" name="categry_product_name" placeholder="Danh Mục Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                            <textarea name="categry_product_desc" cols="55" rows="7">{{$edit_value->category_desc}}</textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        
                        
                        
                        <button type="submit" class="submit">Cập Nhật Danh Mục</button> <br> <br> <br> <br> 
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