@extends('layout')
@section('content')
<link href="{{asset('public/frontend/css/handcash.css')}}" rel="stylesheet">
   
<div class="main-container">
	<div class="check-container">
		<div class="check-background">
			<svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		<div class="check-shadow"></div>     
	</div>
    <h2>Cảm ơn quý khách hàng đã mua sản phẩm tại LONG shop</h2>
    <a class="tranchu" href="{{URL::to('/send-mail')}}">Trang Chủ</a>
</div>

@endsection