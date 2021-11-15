@extends('layout')
@section('content')

<!-- promotion section -->
<div class="promotion">
    
</div>
<!-- end promotion section -->




<!-- product list -->
<div class="section">
    <div class="container">
        
        <div class="section-header">
            <h2>Kết Quả Tìm Kiếm</h2>
        </div>

       
        <div class="row" id="latest-products">
            @foreach($search_product as $key => $product)
            <div class="col-3 col-md-6 col-sm-12">
                <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{('public/uploads/product/'.$product->product_image)}}" alt="">
                            <img src="{{('public/uploads/product/'.$product->product_image)}}" alt="">
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
                </a>
            </div>
            @endforeach
        </div>
        


        <div class="section-footer">
            <a href="{{URL::to('product-show')}}" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->

  {{-- <!-- special product -->
  <div class="bg-second">
    <div class="section container">
        <div class="row">
            <div class="col-4 col-md-4">
                <div class="sp-item-img">
                    <img src="{{('public/frontend/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png')}}" alt="">
                </div>
            </div>
            <div class="col-7 col-md-8">
                <div class="sp-item-info">
                    <div class="sp-item-name">JBL TUNE 750TNC</div>
                    <p class="sp-item-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                    </p>
                    <button class="btn-flat btn-hover">shop now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end special product -->

<!-- product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>best selling</h2>
        </div>
        <div class="row" id="best-products">
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="{{('public/frontend/images/JBL_Quantum_400_Product Image_Hero 02.png')}}" alt="">
                        <img src="{{('public/frontend/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp')}}" alt="">
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
                            JBL Quantum 400
                        </div>
                        <div class="product-card-price">
                            <span><del>$300</del></span>
                            <span class="curr-price">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="./products.html" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->

<!-- blogs -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>latest blog</h2>
        </div>
        <div class="blog">
            <div class="blog-img">
                <img src="{{('public/frontend/images/JBL_Quantum400_Lifestyle1.png')}}" alt="">
            </div>
            <div class="blog-info">
                <div class="blog-title">
                    Lorem ipsum dolor sit amet
                </div>
                <div class="blog-preview">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                </div>
                <button class="btn-flat btn-hover">read more</button>
            </div>
        </div>
        <div class="blog row-revere">
            <div class="blog-img">
                <img src="{{('public/frontend/images/JBL_TUNE220TWS_Lifestyle_black.png')}}" alt="">
            </div>
            <div class="blog-info">
                <div class="blog-title">
                    Lorem ipsum dolor sit amet
                </div>
                <div class="blog-preview">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                </div>
                <button class="btn-flat btn-hover">read more</button>
            </div>
        </div>
        <div class="section-footer">
            <a href="#" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div> --}}
<!-- end blogs -->

@endsection

