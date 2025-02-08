
@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<!-- /breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0"> جدول الملفات المتأخرة/h4>
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
