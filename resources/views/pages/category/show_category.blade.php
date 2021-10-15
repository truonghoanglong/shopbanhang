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
                            Product 
                        </span>
                       
                        <nav class="vertical">
                            <ul>
                            @foreach($brand as $key => $brand)
                              <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{ $brand->brand_name}}</a></li>
                             @endforeach 
                            </ul>
                        </nav>
                    </div>
                    <div class="box">
                        <span class="filter-header">
                            Price
                        </span>
                        <div class="price-range">
                            <input type="text">
                            <span>-</span>
                            <input type="text">
                        </div>
                    </div>
                    <div class="box">
                        <ul class="filter-list">
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="status1">
                                    <label for="status1">
                                        On sale
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="status2">
                                    <label for="status2">
                                        In stock
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="status3">
                                    <label for="status3">
                                        Featured
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <span class="filter-header">
                            Brands
                        </span>
                        <ul class="filter-list">
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1" checked="checked">
                                    <label for="remember1">
                                        JBL
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember2">
                                    <label for="remember2">
                                        Beat
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember3">
                                    <label for="remember3">
                                        Logitech
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember4">
                                    <label for="remember4">
                                        Samsung
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember5">
                                    <label for="remember5">
                                        Sony
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <span class="filter-header">
                            Colors
                        </span>
                        <ul class="filter-list">
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        Red
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember2">
                                    <label for="remember2">
                                        Blue
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember3">
                                    <label for="remember3">
                                        White
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember4">
                                    <label for="remember4">
                                        Pink
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember5">
                                    <label for="remember5">
                                        Yellow
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <span class="filter-header">
                            rating
                        </span>
                        <ul class="filter-list">
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        <span class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </span>
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        <span class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                        </span>
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        <span class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </span>
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        <span class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </span>
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="group-checkbox">
                                    <input type="checkbox" id="remember1">
                                    <label for="remember1">
                                        <span class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </span>
                                        <i class='bx bx-check'></i>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


              


                <div class="col-9 col-md-12">

                    {{-- product --}}
                    <div class="row" id="latest-products">
                        @foreach($category_by_id as $key => $product)
                        <div class="col-3 col-md-6 col-sm-12">
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
                                        <span><del>{{number_format($product->product_price).'VND'}}</del></span>
                                        <span class="curr-price">{{number_format($product->product_price).' VND'}}</span>
                                    </div>
                                </div>
                            </div>
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