@extends('layouts.app')

@section('style')
<!-- NProgress -->
<link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<!-- bootstrap-progressbar -->
<link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css"') }} rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="x_panel tile fixed_height_200 bg-info text-light">
                <div class="x_title">
                    <h2>Karyawan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Karyawan Izin
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Karyawan Pria
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Karyawan Wanita
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Karyawan Total
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 ">
            <div class="x_panel tile fixed_height_200 bg-info text-light">
                <div class="x_title">
                    <h2>Customer</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Customer Baru
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Customer Hari Ini
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-8">
                            Customer Total
                        </div>
                        <div class="col-sm-4 text-right">
                            30
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 ">
            <div class="x_panel tile fixed_height_200 bg-info text-light">
                <div class="x_title">
                    <h2>Pesanan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="text-center font-weight-bold display-3">20</div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- /page content -->
@endsection

@section('script')
<!-- FastClick -->
<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('vendors/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
<script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endsection
