@extends('layout')
@section('content')




<div class="bg-main">
    <div class="container">
        @foreach($product_details as $key => $value)
        <div class="box">
            <div class="breadcumb">
                <a href="./index.html">home</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="./products.html">sản phẩm</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="./product-detail.html">{{$value->product_name}}</a>
            </div>
        </div>


        {{-- sanpham --}}

       
        <div class="row product-row">
            <div class="col-5 col-md-12">
                <div class="product-img" id="product-img">
                    <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}"  alt="">
                </div>
                <div class="box">
                    
                </div>
            </div>

            <div class="col-7 col-md-12">
                <div class="product-info">
                    <h1>
                        {{$value->product_name}}
                    </h1>
                    <div class="product-info-detail">
                        <span class="product-info-detail-title">Thương Hiệu:</span>
                        <a href="#">{{$value->brand_name}}</a>
                    </div>

                    <div class="product-info-detail">
                        <span class="product-info-detail-title">Danh Mục:</span>
                        <a href="#">{{$value->category_name}}</a>
                    </div>
                    <form action="{{URL::to('/save-cart')}}" method="POST">
                        {{csrf_field()}}
                        <p class="product-description">
                            Mô tả sản phẩm: {!!$value->product_desc!!}       
                        </p>

                        <div class="product-info-price">{{number_format($value->product_price).' VND'}}</div>
                        <div class="product-quantity-wrapper">

                            
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                <input name="qty" class="quantity" min="0" value="1" type="number">
                                <input name="productid_hidden" class="quantity" min="0" value="{{$value->product_id}}" type="hidden">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                            
                           

                        </div>
                        <div style="margin-top: 20px">
                            <button type="submit" class="btn-flat btn-hover">add to cart</button>
                        </div>
                    </form>
                    
                    
                </div>
            </div>

        </div>
        
        {{-- end-sanpham --}}




        <div class="box">
            <div class="box-header">
                Nội Dung Chi Tiết Sản Phẩm
            </div>
            <div class="product-detail-description">
                <div class="product-detail-description-content">
                    <p>
                        {!!$value->product_content!!}   
                    </p>
                    <br>
                    <h2>Sản Phẩm Liên Quan</h2>
                    <div class="product-detail-description-content-sp">
                        @foreach($ralate as $key => $lienquan)
                        
                        <div class="sp-lienquan">
                            <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" width="120" height="120" alt="">
                            <h1 style="text-overflow: ellipsis;  overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; width:280px; ">
                                {{$lienquan->product_name}}
                            </h1>
                            <div class="product-info-price">{{number_format($lienquan->product_price).' VND'}}</div>
                            <div class="product-info-detail">
                                {{-- <h3>Danh Mục</h3>
                                <a href="#">{{$lienquan->category_name}}</a> --}}
                            </div>
                            <button class="btn-flat btn-hover">add to cart</button>
                        </div>
                        
                        @endforeach
                    </div>
     
                </div>
            </div>
        </div>



        
        <div class="box">
            <div class="box-header">
                reviewww
            </div>
            
            <div>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
                    {{-- <div class="box">
                        <ul class="pagination">
                            <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                        </ul>
                    </div> --}}
            </div>
        </div>


        @endforeach
        {{-- <div class="box">
            <div class="box-header">
                related products
            </div>
            <div class="row" id="related-products"></div>
        </div> --}}
    </div>
</div>


@endsection