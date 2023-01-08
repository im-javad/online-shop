@extends('admin.layouts.app')

@section('content')
{{-- Add user form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Slug" aria-label="slug">
                </div>
                <div class="col">
                  <input type="email" class="form-control" placeholder="Title" aria-label="title">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Add Category</button>
        </div>
    </div>
</div>
{{-- Add category form end --}}\
<hr>
<!-- Categories list start -->
<div class="main-content-inner">
    <div class="row">
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Id</th>
                <th>Slug</th>
                <th>Title</th>
                <th>Joined</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>nemidanam</th>
                <th>a title for test</th>
                <th>1954/03/12</th>
                <th><a href=""><span class="ti-trash"></span></a>|<a href=""><span class="ti-pencil"></span></a></th>
              </tr>
            </tbody>
          </table>
    </div>
</div>
<!-- Categories list end -->
@endsection