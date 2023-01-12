@extends('admin.layouts.app')

@section('content')

@include('partials.validation-errors')
{{-- Add product form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row">
                <div class="col">
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                  <input name="title" type="text" class="form-control" placeholder="Title" aria-label="title">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <textarea name="description" class="form-control" placeholder="Description" rows="1"></textarea>
                </div>
                <div class="col">
                    <input name="demo_url" class="form-control" type="file">
                </div>
                <div class="col">
                    <input name="price" class="form-control" placeholder="Price" type="numeric" aria-label="price">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Add product</button>
        </div>
        </form>
    </div>
</div>
{{-- Add product form end --}}
@endsection

