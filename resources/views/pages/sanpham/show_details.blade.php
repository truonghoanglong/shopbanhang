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
                    <div class="product-img-list">
                        <div class="product-img-item">
                            <img src="{{URL::to('public/frontend/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png')}}" alt="">
                        </div>
                        <div class="product-img-item">
                            <img src="{{URL::to('public/frontend/images/JBL-Endurance-Sprint_Alt_Red-1605x1605px.webp')}}" alt="">
                        </div>
                        <div class="product-img-item">
                            <img src="{{URL::to('public/frontend/images/JBL_Quantum_400_Product Image_Hero 02.png')}} " alt="">
                        </div>
                    </div>
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

                    {{-- <div class="product-info-detail">
                        <span class="product-info-detail-title">Rated:</span>
                        <span class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </span>
                    </div> --}}
                    <p class="product-description">
                        Mô tả sản phẩm: {!!$value->product_desc!!}       
                    </p>
                    <div class="product-info-price">{{number_format($value->product_price).' VND'}}</div>
                    <div class="product-quantity-wrapper">
                        {{-- <span class="product-quantity-btn">
                            <i class='bx bx-minus'></i>
                        </span>
                        <span class="product-quantity">1</span>
                        <span class="product-quantity-btn">
                            <i class='bx bx-plus'></i>
                        </span> --}}

                        <div class="quantity">
                            <input type="number" min="1" max="20" step="1" value="1">
                        </div>
                        
                    </div>
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
                <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                    view all
                </button>
                <div class="product-detail-description-content">
                    <p>
                        {!!$value->product_content!!}   
                    </p>
                    <img src="./images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                    </p>
                    <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                review
            </div>
            <div>
                <div class="user-rate">
                    <div class="user-info">
                        <div class="user-avt">
                            <img src="./images/tuat.jpg" alt="">
                        </div>
                        <div class="user-name">
                            <span class="name">tuat tran anh</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                    </div>
                    <div class="user-rate-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                    </div>
                </div>
                <div class="user-rate">
                    <div class="user-info">
                        <div class="user-avt">
                            <img src="./images/tuat.jpg" alt="">
                        </div>
                        <div class="user-name">
                            <span class="name">tuat tran anh</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                    </div>
                    <div class="user-rate-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                    </div>
                </div>
                <div class="user-rate">
                    <div class="user-info">
                        <div class="user-avt">
                            <img src="./images/tuat.jpg" alt="">
                        </div>
                        <div class="user-name">
                            <span class="name">tuat tran anh</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                    </div>
                    <div class="user-rate-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                    </div>
                </div>
                <div class="user-rate">
                    <div class="user-info">
                        <div class="user-avt">
                            <img src="./images/tuat.jpg" alt="">
                        </div>
                        <div class="user-name">
                            <span class="name">tuat tran anh</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                    </div>
                    <div class="user-rate-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                    </div>
                </div>
                <div class="user-rate">
                    <div class="user-info">
                        <div class="user-avt">
                            <img src="./images/tuat.jpg" alt="">
                        </div>
                        <div class="user-name">
                            <span class="name">tuat tran anh</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                    </div>
                    <div class="user-rate-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                    </div>
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