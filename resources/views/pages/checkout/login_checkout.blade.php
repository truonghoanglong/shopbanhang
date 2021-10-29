<link href="{{asset('public/frontend/css/login_checkout.css')}}" rel="stylesheet">

@extends('layout')
@section('content')


<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@600&display=swap" rel="stylesheet">

<body>
	<div class="big-box">
		<div class="box">
			<input type="checkbox" id="toggle" class="box__toggle" hidden>
			<img src="https://www.dropbox.com/s/u1hx11933jjk7j5/unsplash-bike.jpeg?raw=1" alt="Picture by Autumn Studio" class="box__image">
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


				<button type="submit" class="form__button">Register</button>

				<p class="form__text">Already have an account? <label for="toggle" class="form__link">Sign in!</label>
			</form>

			<form class="form form--login" action="">
				<h1 class="form__title">Đăng Nhập</h1>

				<div class="form__helper">
					<input type="text" name="email_account" id="user" placeholder="User" class="form__input" />
					<label class="form__label" for="user">User</label>
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
