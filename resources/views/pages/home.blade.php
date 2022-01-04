@extends('layout')
@section('content')


<div class="hero">
    <div class="slider">
        <div class="container">
            <!-- slide item -->
            <div class="slide active">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            Đồng Hồ Thông Minh
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Apple Seri
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            Trong khi chờ đợi những chiếc Apple Watch thế hệ thứ 7 nhà Apple xuất hiện tại Việt Nam thì mình có dạo qua một vài trang công nghệ nước ngoài xem họ đánh giá sao về chiếc đồng hồ này. Nếu các bạn cũng tò mò như mình thì bài viết này sẽ tổng hợp những đánh giá nhanh của họ nhé.
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img top-down">
                    <img src="{{asset('public/frontend/images/intro1.png')}}" alt="">
                </div>
            </div>
            <!-- end slide item -->
            <!-- slide item -->
            <div class="slide">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            Đồng Hồ Điện Tử 
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Ipsum dolor
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            Có thể gọi Apple Watch SE là phiên bản giá rẻ của Apple Watch Series 6 vì ngoài một vài tính năng bị cắt giảm, gần như những sự khác biệt là không đáng kể. Vậy đây có phải món hời mà Apple mang đến cho người dùng? Hãy cùng theo dõi trong bài viết này nhé!
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img right-left">
                    <img src="{{asset('public/frontend/images/intro2.png')}}" alt="">
                </div>
            </div>
            <!-- end slide item -->
            <!-- slide item -->
            <div class="slide">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            Đồng Hồ Cơ
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Consectetur Elit
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            SE vẫn có những tính năng cơ bản liên quan đến sức khỏe như đo nhịp tim và các cảm biến thông thường như khí áp kế, gia tốc kế, phát hiện té ngã hay cảm biến ánh sáng xung quanh,… nên mình sẽ không đề cập đến nữa mà sẽ chỉ tập trung vào những điểm khác biệt so với Series 6.
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img left-right">
                    <img src="{{asset('public/frontend/images/intro33.png')}}" alt="">
                </div>
            </div>
            <!-- end slide item -->
        </div>
        <!-- slider controller -->
        <button class="slide-controll slide-next">
            <i class='bx bxs-chevron-right'></i>
        </button>
        <button class="slide-controll slide-prev">
            <i class='bx bxs-chevron-left'></i>
        </button>
        <!-- end slider controller -->
    </div>
</div>


<!-- product list -->
<div class="section">
    <div class="container">
        
        <div class="section-header">
            <h2>Danh mục sản phẩm</h2>
        </div>

       
        <div class="row" id="latest-products">
            @foreach($all_product as $key => $product)
            <div class="col-3 col-md-6 col-sm-12">
                <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                    <div class="product-card">
                        {{-- <form>
                            {{csrf_field()}}
                        <input type="hidden" value="{{$product->product_id}}" class="card_product_id_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_name}}" class="card_product_name_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_image}}" class="card_product_image_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_price}}" class="card_product_price_{{$product->product_id}}">
                        <input type="hidden" value="1" class="card_product_qty_{{$product->product_id}}"> --}}

                        
                        <div class="product-card-img">
                            <img src="{{('public/uploads/product/'.$product->product_image)}}" alt="">
                            <img src="{{('public/uploads/product/'.$product->product_image)}}" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                            
                                {{-- <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button> --}}
                            

                                <button type="button" class="btn-flat btn-hover btn-cart-add" data-id={{$product->product_id}} name="add-to-card">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                {{$product->product_name}}
                            </div>
                            <div class="product-card-price">
                                <span class="curr-price">{{number_format($product->product_price).' VND'}}</span>
                            </div>
                        </div>
                        

                         {{-- </form> --}}
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

  <!-- special product -->
{{-- <div class="bg-second">
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
</div> --}}
<!-- end special product -->

<!-- product list -->
{{-- <div class="section">
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
</div> --}}
<!-- end product list -->

<!-- blogs -->
{{-- <div class="section">
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
<!-- blogs -->
<div class="section">
    <div class="container">
      <div class="section-header">
        <h2>clock</h2>
      </div>
      <div class="blog">
        <div class="blog-img">
          <img src="{{asset('public/uploads/blog/intro1142.png')}}" alt="" />
        </div>
        <div class="blog-info">
          <div class="blog-title">Các dòng đồng hồ seri 7</div>
          <div class="blog-preview">
            Có thể gọi Apple Watch SE là phiên bản giá rẻ của Apple Watch Series 6 vì ngoài một vài tính năng bị cắt giảm, gần như những sự khác biệt là không đáng kể. Vậy đây có phải món hời mà Apple mang đến cho người dùng? Hãy cùng theo dõi trong bài viết này nhé!
          </div>
          <button class="btn-flat btn-hover"><a href="{{URL::to('/blog')}}">đọc thêm</a></button>
        </div>
      </div>
      <div class="blog row-revere">
        <div class="blog-img">
          <img src="{{asset('public/uploads/blog/Apple-Watch-Series-7-400x300242.png')}}" alt="" style="border-radius:15px" />
        </div>
        <div class="blog-info">
          <div class="blog-title">Các dòng đồng hồ seri 6 </div>
          <div class="blog-preview">
            Apple Watch SE là chiếc đồng hồ đáng đến từng xu vì trải nghiệm nó mang lại. Sở dĩ mình nói như vậy vì máy có độ mượt ngang ngửa với Series 5 và chỉ kém 20% so với Series 6. Trong khi mức giá lại rẻ hơn Series 5 gần 2 triệu và rẻ hơn Series 6 đến 3 triệu. 
          </div>
          <button class="btn-flat btn-hover"><a href="{{URL::to('/blog')}}">đọc thêm</a></button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end blogs -->


    <div style="margin: 0 0 100px 660px" class="fb-like" data-href="http://localhost:8080/shopbanhang/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

<!-- footer -->
@endsection