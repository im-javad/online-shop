@extends('admin.layouts.app')

@section('title' , 'Edit Category')

@section('content')

@include('partials.validation-errors')
{{-- Edit category form start --}}
<div class="col-12 mt-5">
    <div class="card">
      <form action="{{ route('categories.update' , $category->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" aria-label="slug">
                </div>
                <div class="col">
                  <input type="text" name="title" class="form-control" value="{{ $category->title }}" placeholder="Title" aria-label="title">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="txt">Edit Category</button>
        </div>
      </form>
    </div>
</div>
{{-- Edit category form end --}}
@endsection