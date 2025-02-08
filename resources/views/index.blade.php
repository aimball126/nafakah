
@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <div>
            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">أهلا بك, في منصة نفقة</h2>
            <p class="mg-b-0">المنصة المخصصة لجميع مايتعلق بالنفقة</p>
        </div>
    </div>
</div>
<!-- /breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row row-sm">
    <!-- Your existing cards go here -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-primary-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">جميع الملفات</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">1,420</h4>
                        </div>
                    </div>
                </div>
            </div>
            <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-danger-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">الملفات المحالة</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">1234</h4>
                        </div>
                    </div>
                </div>
            </div>
            <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">الملفات المتأخرة</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">43</h4>
                        </div>
                    </div>
                </div>
            </div>
            <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-warning-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">إجمالي المستخدمين</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">432</h4>
                        </div>
                    </div>
                </div>
            </div>
            <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
        </div>
    </div>
</div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">جدول الملفات</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>رقم الملف</th>
                            <th>اسم المطلق</th>
                            <th>اسم المطلقة</th>
                            <th>عدد الأطفال</th>
                            <th>قيمة النفقة</th>
                            <th>حالة الملف</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>أحمد</td>
                            <td>فاطمة</td>
                            <td>2</td>
                            <td>300 دل</td>
                            <td>
                                <span class="badge badge-success">مدفوع</span>
                            </td>
                            <td>
                                <a href="#" class="text-primary"><i class="mdi mdi-printer"></i></a>
                                <a href="#" class="text-warning"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>محمد</td>
                            <td>عائشة</td>
                            <td>3</td>
                            <td>300 دل</td>
                            <td>
                                <span class="badge badge-danger">غير مدفوع</span>
                            </td>
                            <td>
                                <a href="#" class="text-primary"><i class="mdi mdi-printer"></i></a>
                                <a href="#" class="text-warning"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>علي</td>
                            <td>سارة</td>
                            <td>1</td>
                            <td>300 دل</td>
                            <td>
                                <span class="badge badge-success">مدفوع</span>
                            </td>
                            <td>
                                <a href="#" class="text-primary"><i class="mdi mdi-printer"></i></a>
                                <a href="#" class="text-warning"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>يوسف</td>
                            <td>مريم</td>
                            <td>4</td>
                            <td>300 دل</td>
                            <td>
                                <span class="badge badge-danger">غير مدفوع</span>
                            </td>
                            <td>
                                <a href="#" class="text-primary"><i class="mdi mdi-printer"></i></a>
                                <a href="#" class="text-warning"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>سالم</td>
                            <td>ليلى</td>
                            <td>2</td>
                            <td>300 دل</td>
                            <td>
                                <span class="badge badge-success">مدفوع</span>
                            </td>
                            <td>
                                <a href="#" class="text-primary"><i class="mdi mdi-printer"></i></a>
                                <a href="#" class="text-warning"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="mt-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                    <li class="page-item">
                            <a class="page-link" href="#">التالي</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">السابق</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <!-- End of Pagination -->
        </div>
    </div>
</div>
<!-- row closed -->
<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
