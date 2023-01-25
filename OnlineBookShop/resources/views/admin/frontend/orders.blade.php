@extends('admin.layouts.app')

@section('title' , 'Admin-Orders')

@section('content')
<!-- Orders Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Orders list</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">ResNum</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Built</th>
                                    <th scope="col">Order basket</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($orders as $order)
                                <tr>
                                    <th>{{ $order->id }}</th>
                                    <td>{{ $order->user->name }}</td>
                                    <td>${{ $order->amount }}</td>
                                    <td>{{ $order->res_num }}</td>
                                    <td>
                                        @if($order->status === 'paid')
                                            <i class="fa fa-smile-o"></i>
                                        @else
                                            <i class="fa fa-frown-o"></i>
                                        @endif
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    <th>
                                    <!-- Start cart modal-->
                                        <button id="open-modal-cart" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"><li class="fa fa-link"></li></button>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Modal body...
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                          
                                    <!-- End cart modal-->
                                    </th>                    
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              {{ $orders->links() }}
                            </ul>
                        </nav>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Orders Table end -->
@endsection

