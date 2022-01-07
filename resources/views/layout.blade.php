<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LONG</title>

    {{-- custom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- fonawesom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- app css -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">


</head>

<body>
    <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="{{URL::to('/')}}" class="mb-logo">LONG</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="#">+84961613630</a>
                        </li>
                        <li>
                            <a href="#">LONG@mail.com</a>
                        </li>
                    </ul>
                    <ul class="devided">
                       
                        
                        <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/checkout')}}"><i class=""></i> Thanh toán</a></li>
                                
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="{{URL::to('/payment')}}"><i class=""></i> Thanh toán</a></li>
                                 <?php 
                                }else{
                                ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class=""></i> Thanh toán</a></li>
                                <?php
                                 }
                        ?>
                        
                        

                       
                        <li><a href="{{URL::to('/show-cart')}}">Giỏ Hàng</a></li>

                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL) { 
                        ?>
                        <li><a href="{{URL::to('/logout-checkout')}}">Đăng Xuất</a></li>
                        <?php 
                        }else{
                        ?>
                            <li><a href="{{URL::to('/login-checkout')}}">Đăng Nhập</a></li>

                        <?php
                        }
                        ?>

                       

                        
                    </ul>
                </div>
            </div>
            <!-- end top header -->
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="{{URL::to('/')}}" class="logo">LONG</a>
                    <form action="{{URL::to('tim-kiem')}}" method="POST">
                        {{csrf_field()}}
                        <div class="search">
                            <input type="text" placeholder="Tìm kiếm sản phẩm" name="keywords_submit">
                            
                            <input id="search" type="submit" value="Search"/>
                        </div>
                    </form>
                    <ul class="user-menu">
                        <li><a href="#"><i class='bx bx-bell'></i></a></li>
                        <li><a href="{{URL::to('/login-checkout')}}"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="{{URL::to('show-cart')}}"><i class='bx bx-cart'></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                        <!-- mega menu -->
                        <li><a href="{{URL::to('/product-show')}}">Shop</a></li>
                        <!-- end mega menu -->
                        <li><a href="{{URL::to('/blog')}}">blog</a></li>
                        <li><a href="{{URL::to('/contact')}}">contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->
    
    <!-- hero section -->
    
    <!-- end hero section -->

        @yield('content')
     
    <footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Sản phẩm</h3>
                    <ul class="menu">
                        <li><a href="#">Trung tâm trợ giúp</a></li>
                        <li><a href="#">Liên hệ với chung tôi</a></li>
                        <li><a href="#">hỏi đáp sản phẩm</a></li>
                        <li><a href="#">Bảo hàng</a></li>
                        <li><a href="#">Dịch vụ khách hàng</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Dịch vụ</h3>
                    <ul class="menu">
                        <li><a href="#">Trung tâm dịch vụ</a></li>
                        <li><a href="#">Hỏi đáp dịch vụ</a></li>
                        <li><a href="#">hổ trợ dịch vụ</a></li>
                        <li><a href="#">CSKH</a></li>
                        <li><a href="#">Đặt hàng</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Hổ trợ</h3>
                    <ul class="menu">
                        <li><a href="#">hổ trợ khách hàng</a></li>
                        <li><a href="#">CSKH</a></li>
                        <li><a href="#">Đóng góp ý kiến</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            LONG
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="https://www.facebook.com/truonghoanglongabc/">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="Gửi mail cho chúng tôi">
                        <button>subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- app js -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/app.js')}}"></script>
    <script src="{{asset('public/frontend/js/index.js')}}"></script>

    <script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
    
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $('.btn-cart-add').click(function(){
                var id=$(this).data('id');
                //var cart_product_id = $('.cart_product_id_'+ id).val();
                var cart_product_name = $('.card_product_name_' + id).val();
                var cart_product_image = $('.card_product_image_' + id).val();
                var cart_product_price = $('.card_product_price_' + id).val();
                var cart_product_qty = $('.card_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(data){
                        alert(data);
                    }
                });
            })
        });
    </script> --}}

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="VH63mylo"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="i6zJ9oSU"></script>

    
</body>

</html>