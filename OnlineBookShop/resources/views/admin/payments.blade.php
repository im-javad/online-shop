@extends('admin.layouts.app')

@section('content')
    <!-- Payments Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Progress Table</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">OrderId</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">RefNum</th>
                                    <th scope="col">Built</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>315</td>
                                    <td>$ 18900</td>
                                    <td>Online</td>
                                    <td>PayPal</td>
                                    <td><span class="status-p bg-primary">pending</span> <span class="status-p bg-success">complate</span> <span class="status-p bg-danger">fail</span></td>
                                    <td>88328hsjdhnsj734</td>
                                    <td>2011/11/11</td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Payments Table end -->
@endsection