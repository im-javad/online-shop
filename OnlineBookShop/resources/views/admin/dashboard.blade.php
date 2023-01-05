@extends('admin.layouts.app')

@section('content')
<div class="main-content-inner">
    <!-- report area start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-dollar"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Sold</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                        </div>
                    </div>
                    <canvas id="coin_sales1" height="100"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Users</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2>321524</h2>
                            <span>- 45.87</span>
                        </div>
                    </div>
                    <canvas id="coin_sales3" height="100"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-cube"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Products</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2>3214</h2>
                            <span>- 45.87</span>
                        </div>
                    </div>
                    <canvas id="coin_sales2" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- report area end -->
@endsection

