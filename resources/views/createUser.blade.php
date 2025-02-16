
@extends('layouts.master')

@section('css')
<!-- Internal Select2 css -->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<style>
    body {
        direction: rtl; /* Set text direction to right-to-left */
    }
</style>
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الصفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ إنشاء مستخدم جديد</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')
<!-- row -->
<div class="row row-sm">
    <!-- Col -->
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="pl-0">
                    <div class="main-profile-overview">
                        <div class="main-img-user profile-user">
                            <img alt="" src="{{ URL::asset('assets/img/faces/6.png') }}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                        </div>
                        <div class="d-flex justify-content-between mg-b-20">
                            <div>
                                <h5 class="main-profile-name">إنشاء مستخدم جديد</h5>
                            </div>
                        </div>
                        <hr class="mg-y-30">
                    </div><!-- main-profile-overview -->
                </div>
            </div>
        </div>
    </div>
    <!-- Col -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="mb-4 main-content-label">معلومات شخصية</div>

<form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
    @csrf <!-- CSRF token for security -->
    <div class="mb-4 main-content-label">الاسم</div>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-3">
                <label class="form-label">اسم المستخدم</label>
            </div>
            <div class="col-md-9">
                <input type="text" name="username" class="form-control" placeholder="اسم المستخدم" required>
            </div>
        </div>
    </div>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-3">
                <label class="form-label">الهاتف<i>(مطلوب)</i></label>
            </div>
            <div class="col-md-9">
                <input type="text" name="telephone" class="form-control" placeholder="رقم الهاتف" required>
            </div>
        </div>
    </div>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-3">
                <label class="form-label">كلمة المرور<i>(مطلوب)</i></label>
            </div>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
            </div>
        </div>
    </div>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-3">
                <label class="form-label">تأكيد كلمة المرور<i>(مطلوب)</i></label>
            </div>
            <div class="col-md-9">
                <input type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة المرور" required>
            </div>
        </div>
    </div>
    <input type="hidden" name="type" value="1"> <!-- Hidden field for user type -->
    <div class="card-footer text-left">
        <button type="submit" class="btn btn-primary waves-effect waves-light">إنشاء المستخدم</button>
    </div>
</form>
        </div>
    </div>
    <!-- /Col -->
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
<!-- Internal Select2.min js -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/select2.js') }}"></script>
@endsection
