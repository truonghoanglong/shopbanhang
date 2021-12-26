<link href="{{asset('public/frontend/css/login_checkout.css')}}" rel="stylesheet">

@extends('layout')
@section('content')


<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@600&display=swap" rel="stylesheet">

<body>
	<div class="big-box">
		<div class="box">
			<input type="checkbox" id="toggle" class="box__toggle" hidden>
			<img src="https://images.unsplash.com/photo-1551816230-ef5deaed4a26?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80" alt="none" class="box__image">
			<form class="form form--register" action="{{URL::to('/add-customer')}}" method="POST">
				{{csrf_field()}}
				<h1 class="form__title">Đăng Ký</h1>

				<div class="form__helper">
					<input type="text" name="customer_name" id="new-user" placeholder="User" class="form__input" />
					<label class="form__label" for="new-user">User</label>
				</div>

				<div class="form__helper">
					<input type="email" name="customer_email" id="email" placeholder="Email" class="form__input" />
					<label class="form__label" for="email">Email</label>
				</div>

				<div class="form__helper">
					<input type="text" name="customer_phone" id="new-user-password" placeholder="Phone" class="form__input" />
					<label class="form__label" for="new-user-password">Phone</label>
				</div>

				<div class="form__helper">
					<input type="password" name="customer_password" id="new-user-password" placeholder="Password" class="form__input" />
					<label class="form__label" for="new-user-password">Password</label>
				</div>


				<button type="submit" class="form__button">Đăng Ký</button>

				<p class="form__text">Already have an account? <label for="toggle" class="form__link">Sign in!</label>
			</form>

			{{-- login-customer --}}
			<form class="form form--login" action="{{URL::to('/login-customer')}}" method="POST"> 
				{{csrf_field()}}
				<h1 class="form__title">Đăng Nhập</h1>

				<div class="form__helper">
					<input type="text" name="email_account" id="user" placeholder="User" class="form__input" />
					<label class="form__label" for="user">Email</label>
				</div>

				<div class="form__helper">
					<input type="password" name="password_account" id="password" placeholder="Password" class="form__input" />
					<label class="form__label" for="password">Password</label>
				</div>

				<button type="submit" class="form__button">Đăng Nhập</button>

				<p class="form__text">Don't have an account? <label for="toggle" class="form__link">Sign up!</label>
			</form>
		</div>
	</div>
</body>




@endsection
