@extends('admin.layouts.app')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- Product list start -->
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Built</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>biography</th>
                <th>Adolf hitler</th>
                <th>This is a book about biography of heail hitler</th>
                <th>$ 1954</th>
                <th>1945/03/12</th>
                <th><a href=""><span class="ti-trash"></span></a>|<a href=""><span class="ti-pencil"></span></a></th>
              </tr>
            </tbody>
          </table>
        <!-- Products list end -->
    </div>
</div>
@endsection

