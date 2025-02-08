
@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">جميع المسؤولين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة المسؤولين</span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!--Row-->
<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">جدول المسؤولين</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive border-top userlist-table">
                    <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>المستخدم</span></th>
                                <th class="wd-lg-20p"><span></span></th>
                                <th class="wd-lg-20p"><span>تاريخ الإنشاء</span></th>
                                <th class="wd-lg-20p"><span>رقم الهاتف</span></th>
                                <th class="wd-lg-20p">الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/1.jpg')}}">
                                </td>
                                <td>Megan Peters</td>
                                <td>
                                    08/06/2020
                                </td>
                                <td>
                                    <a href="#">+123456789</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/2.jpg')}}">
                                </td>
                                <td>George Clooney</td>
                                <td>
                                    12/06/2020
                                </td>
                                <td>
                                    <a href="#">+987654321</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/13.jpg')}}">
                                </td>
                                <td>Ryan Gossling</td>
                                <td>
                                    14/06/2020
                                </td>
                                <td>
                                    <a href="#">+456789123</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/1.jpg')}}">
                                </td>
                                <td>Emma Watson</td>
                                <td>
                                    16/06/2020
                                </td>
                                <td>
                                    <a href="#">+321654987</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/12.jpg')}}">
                                </td>
                                <td>Mila Kunis</td>
                                <td>
                                    18/06/2020
                                </td>
                                <td>
                                    <a href="#">+654321789</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/4.jpg')}}">
                                </td>
                                <td>Phil Watson</td>
                                <td>
                                    23/06/2020
                                </td>
                                <td>
                                    <a href="#">+987321654</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/5.jpg')}}">
                                </td>
                                <td>Sonia Robertson</td>
                                <td>
                                    25/06/2020
                                </td>
                                <td>
                                    <a href="#">+654987321</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/7.jpg')}}">
                                </td>
                                <td>Adam Hamilton</td>
                                <td>
                                    31/06/2020
                                </td>
                                <td>
                                    <a href="#">+321987654</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/9.jpg')}}">
                                </td>
                                <td>Leah Morgan</td>
                                <td>
                                    02/07/2020
                                </td>
                                <td>
                                    <a href="#">+456123789</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/11.jpg')}}">
                                </td>
                                <td>Amelia McDonald</td>
                                <td>
                                    08/07/2020
                                </td>
                                <td>
                                    <a href="#">+789456123</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/17.jpg')}}">
                                </td>
                                <td>Paul Molive</td>
                                <td>
                                    12/07/2020
                                </td>
                                <td>
                                    <a href="#">+321654987</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination mt-4 mb-0 float-left">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">السابق</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">التالي</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- COL END -->
</div>
<!-- row closed  -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection
