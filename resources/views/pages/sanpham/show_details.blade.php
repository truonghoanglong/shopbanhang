@extends('layout')
@section('content')




<div class="bg-main">
    <div class="container">
        <div class="box">
            <div class="breadcumb">
                <a href="./index.html">home</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="./products.html">all products</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="./product-detail.html">JBL Tune 750TNC</a>
            </div>
        </div>


        {{-- sanpham --}}

        @foreach($product_details as $key => $value)
        <div class="row product-row">
            <div class="col-5 col-md-12">
                <div class="product-img" id="product-img">
                    <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="">
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
                    <form action="">
                        <p class="product-description">
                            Mô tả sản phẩm: {!!$value->product_desc!!}       
                        </p>
                        <div class="product-info-price">{{number_format($value->product_price).' VND'}}</div>
                        <div class="product-quantity-wrapper">

                            
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>  
                            

                        </div>
                    </form>
                    <div>
                        <button class="btn-flat btn-hover">add to cart</button>
                    </div>
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
                            <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="">
                            <h1>
                                {{$lienquan->product_name}}
                            </h1>
                            <div class="product-info-price">{{number_format($lienquan->product_price).' VND'}}</div>
                            <div class="product-info-detail">
                                <h3>Danh Mục</h3>
                                <a href="#">{{$lienquan->category_name}}</a>
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
                
                <div class="box">
                    <ul class="pagination">
                        <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        @endforeach
        <div class="box">
            <div class="box-header">
                related products
            </div>
            <div class="row" id="related-products"></div>
        </div>
    </div>
</div>


@endsection