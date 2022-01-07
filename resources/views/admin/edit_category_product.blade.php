@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3 style="color:rgb(79,146,255)" >Cập Nhật Danh Mục Sản Phẩm </h3>
                </header>
                <div class="panel-body">
                   @foreach($edit_category_product as $key => $edit_value)
                    <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label style="margin-top:50px" for="exampleInputEmail1"><h4>Tên Danh Mục</h4></label>
                            <input type="text" value="{{$edit_value->category_name}}" class="form-control" name="categry_product_name" placeholder="Danh Mục Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label style="margin-top:50px" for="exampleInputPassword1"><h4>Mô Tả Danh Mục</h4></label>
                            <textarea name="categry_product_desc" cols="55" rows="7">{{$edit_value->category_desc}}</textarea>
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        
                        
                        
                        <button style="width:150px; background:rgb(79,146,255)" type="submit" class="submit" type="submit" class="submit">Cập Nhật Danh Mục</button> <br> <br> <br> <br> 
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