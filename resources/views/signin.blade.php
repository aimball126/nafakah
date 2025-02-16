
@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('assets/img/media/login.jpg')}}" class="my-auto ht-xl-100p wd-md-100p wd-xl-100p mx-auto" alt="logo"> <!-- Increased logo size -->
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="sign-favicon ht-60 mx-auto" alt="logo"></a></div> <!-- Centered logo -->
										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>مرحبًا بعودتك!</h2>
												<h5 class="font-weight-semibold mb-4">يرجى تسجيل الدخول للمتابعة.</h5>

<form action="{{ route('signin') }}" method="POST"> <!-- Changed action to use route -->
    @csrf <!-- CSRF token for security -->
    <div class="form-group">
        <label>اسم المستخدم</label>
        <input class="form-control" placeholder="أدخل اسم المستخدم" type="text" name="username" required>
    </div>
    <div class="form-group">
        <label>رقم الهاتف</label>
        <input class="form-control" placeholder="أدخل رقم الهاتف" type="text" name="telephone" required>
    </div>
    <div class="form-group">
        <label>كلمة المرور</label>
        <input class="form-control" placeholder="أدخل كلمة المرور" type="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-main-primary btn-block">تسجيل الدخول</button>
</form>
												<!-- Removed "Forgot password?" and "Don't have an account? Create an Account" texts -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection
