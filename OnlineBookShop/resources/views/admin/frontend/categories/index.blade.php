@extends('admin.layouts.app')

@section('title' , 'Admin-Categories')

@section('content')
{{-- Add category form start --}}
<div class="col-12 mt-5"> 
  <div class="card">
    <form action="{{ route('admin.categories.storage') }}" method="POST">
    @csrf
      <div class="card-body">
          <div class="row">
              <div class="col">
                <input type="text" name="slug" class="form-control" placeholder="Slug" aria-label="slug">
              </div>
              <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" aria-label="title">
              </div>
          </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="txt">Add Category</button>
      </div>
    </form>
  </div>
</div>
{{-- Add category form end --}}
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
        @foreach ($categories as $category)
          <tr>
            <th>{{ $category->id }}</th>
            <th>{{ $category->slug }}</th>
            <th>{{ $category->title }}</th>
            <th>{{ $category->created_at }}</th>
            <th>
              <form action="{{ route('admin.categories.destroy' , $category->id) }}" method="POST" id='prepare-form'>
              @csrf
              @method('delete')
                <button type="submit" id="button-delete"><span class="ti-trash"></span></button>
              </form>
              |
              <a href="{{ route('admin.categories.edit' , $category->id) }}" id="a-black"><span class="ti-pencil"></span></a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        {{ $categories->links() }}
      </ul>
    </nav>  
  </div>
</div>
<!-- Categories list end -->
@endsection
