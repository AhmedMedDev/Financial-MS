@extends('layouts.master2')
@section('css')
<link href="{{URL::asset('css/unauth.css')}}" rel="stylesheet">
@endsection
@section('content')
		<!-- Main-error-wrapper -->
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="HarLogin.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf

						{{--  --}}
						<label for="email" class="col-form-label">البريد الالكترونى</label>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user form-control @error('email') is-invalid @enderror" value="" >
							<span class="invalid-feedback">
								<strong>يوجد خطاء فى البريد الالكترونى او كلمة المرور</strong>
							</span>
						</div>
						
						{{--  --}}
						<label for="">كلمة المرور</label>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass form-control @error('password') is-invalid @enderror" value="">
						</div>

						{{--  --}}
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline" name="remember"  {{ old('remember') ? 'checked' : '' }}>
								<label class="custom-control-label" for="customControlInline">تذكرنى</label>
							</div>
						</div>

						{{--  --}}
						<div class="d-flex justify-content-center mt-3 login_container">
				 			<button type="submit" name="button" class="btn login_btn">تسجيل دخول</button>
				   		</div>

					</form>
				</div>
			</div>
		</div>
		<!-- /Main-error-wrapper -->
@endsection
@section('js')
@endsection