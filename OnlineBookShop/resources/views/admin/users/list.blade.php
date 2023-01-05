@extends('admin.layouts.app')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- Users list start -->
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Number</th>
                <th>Address</th>
                <th>Joined</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>Javad Jadidi</th>
                <th>javad@gmail.com</th>
                <th>admin</th>
                <th>0953826435</th>
                <th>evrywhere at all of strets and bla bla bla 87 street p902</th>
                <th>1954/03/12</th>
                <th><a href=""><span class="ti-trash"></span></a>|<a href=""><span class="ti-pencil"></span></a></th>
              </tr>
            </tbody>
          </table>
        <!-- Users list end -->
    </div>
</div>
@endsection

