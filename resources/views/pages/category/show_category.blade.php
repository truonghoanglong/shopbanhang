@extends('layout')
@section('content')



<div class="bg-main">
    <div class="container">
        <div class="box">
            <div class="breadcumb">
                <a href="./index.html">home</a>
                <span><i class='bx bxs-chevrons-right'></i></span>
                <a href="./products.html">all products</a>
            </div>
        </div>
        <div class="box">
            <div class="row">
                <div class="col-3 filter-col" id="filter-col">
                    <div class="box filter-toggle-box">
                        <button class="btn-flat btn-hover" id="filter-close">close</button>
                    </div>
                    <div class="box">
                        <span class="filter-header">
                            Danh Mục Sản Phẩm        
                        </span>
                        @foreach($category as $key => $cate) 
                        {{-- @foreach($all_product as $key => $product) --}}
                        <nav class="vertical">
                            
                            {{-- <ul> --}}
                            
                              <div><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{ $cate->category_name}}</a>
                                {{-- <ul>
                                  <li><a href="#">Service 1</a></li>
                                  <li><a href="#">Service 2</a></li>
                                  <li><a href="#">Service 3</a></li>
                                </ul> --}}
                              </div>
                            
                            {{-- </ul> --}}
                            
                        </nav>
                        @endforeach
                        
                    </div>

                    <div class="box">
                        <span class="filter-header">
                            Thương Hiệu Sản Phẩm
                        </span>
                       
                        <nav class="vertical">
                            <ul>
                            @foreach($brand as $key => $brand)
                              <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{ $brand->brand_name}}</a></li>
                             @endforeach 
                            </ul>
                        </nav>
                    </div>
 
                </div>


              


                <div class="col-9 col-md-12">

                    {{-- product --}}
                    <div class="row" id="latest-products">
                        @foreach($category_by_id as $key => $product)
                        <div class="col-3 col-md-6 col-sm-12">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <img src="{{asset('public/uploads/product/'.$product->product_image)}}" alt="none">
                                        <img src="{{asset('public/uploads/product/'.$product->product_image)}}" alt="none">
                                    </div>
                                    <div class="product-card-info">
                                        <div class="product-btn">
                                            <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                                            <button class="btn-flat btn-hover btn-cart-add">
                                                <i class='bx bxs-cart-add'></i>
                                            </button>
                                            <button class="btn-flat btn-hover btn-cart-add">
                                                <i class='bx bxs-heart'></i>
                                            </button>
                                        </div>
                                        <div class="product-card-name">
                                            {{$product->product_name}}
                                        </div>
                                        <div class="product-card-price">
                                        
                                            <span class="curr-price">{{number_format($product->product_price).' VND'}}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    {{-- end-product --}}

                    <div class="box filter-toggle-box">
                        <button class="btn-flat btn-hover" id="filter-toggle">filter</button>
                    </div>
                    <div class="box">
                        <div class="row" id="products"></div>
                    </div>
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
        </div>
    </div>
</div>














@endsection