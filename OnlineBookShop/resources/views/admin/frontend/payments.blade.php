@extends('admin.layouts.app')

@section('title' , 'Admin-Payments')

@section('content')
<!-- Payments Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Payments List</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">OrderId</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">RefNum</th>
                                    <th scope="col">Built</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <th>{{ $payment->id }}</th>
                                        <td>{{ $payment->order_id }}</td>
                                        <td>{{ $payment->order->user->name }}</td>
                                        <td>${{ $payment->amount }}</td>
                                        <td>{{ $payment->method }}</td>
                                        <td>{{ $payment->gateway }}</td>
                                        <td>
                                            @if($payment->status === 'paid')
                                                <i class="fa fa-smile-o"></i>
                                            @else
                                                <i class="fa fa-frown-o"></i>
                                            @endif
                                        </td>                                        
                                        <td>{{ $payment->ref_num }}</td>
                                        <td>{{ $payment->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              {{ $payments->links() }}
                            </ul>
                        </nav>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Payments Table end -->
@endsection
