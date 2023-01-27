@extends('admin.layouts.app')

@section('title' , 'Admin-Edit product')
    
@section('content')
{{-- Edit product form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <form action="{{ route('admin.products.update' , $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf 
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id === $product->category_id) ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <input value="{{ $product->title }}" name="title" type="text" class="form-control" placeholder="Title" aria-label="title">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <textarea name="description" class="form-control" placeholder="Description" rows="2">{{ $product->description }}</textarea>
                    </div>
                    <div class="col">
                        <input value="{{ $product->percent_discount }}" name="percent_discount" class="form-control" type="txt" placeholder="Percent">
                    </div>
                    <div class="col">
                        <input value="#" name="demo_url" class="form-control" type="file">
                        <a href="{{ config('urls.images_products_url') . $product->demo_url }}" id="current-demo">current demo</span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <input value="{{ $product->author }}" name="author" class="form-control" placeholder="Author" type="text" aria-label="author">
                    </div>
                    <div class="col">
                        <input value="{{ $product->price }}" name="price" class="form-control" placeholder="Price" type="numeric" aria-label="price">
                    </div>
                    <div class="col">
                        <input value="{{ $product->stock }}" name="stock" class="form-control" placeholder="Stock" type="numeric" aria-label="stock">
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Edit product</button>
            </div>
        </form>
    </div>
</div>
{{-- Edit product form end --}}
@endsection

