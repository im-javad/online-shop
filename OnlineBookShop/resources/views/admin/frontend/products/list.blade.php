@extends('admin.layouts.app')

@section('title' , 'Admin-Products')

@section('content')
<!-- Product list start -->
<div class="main-content-inner">
    <div class="row">
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Description</th>
                <th>Demo</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Discount</th>
                <th>Built</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <th>{{ $product->id }}</th>
                  <th>{{ $product->title }}</th>
                  <th>{{ $product->category->title }}</th>
                  <th>{{ $product->author }}</th>
                  <th>{{ substr($product->description , 0 , 15) . '...' }}</th>
                  <th>
                    <a href="{{ config('urls.images_products_url') . $product->demo_url }}" id="a-black"><span class="ti-link"></span></a>
                    |
                    <a href="{{ route('admin.products.download.demo' , $product->id)}}" id="a-black"><span class="ti-download"></span></a>
                  </th>
                  <th>${{ $product->price }}</th>
                  <th>{{ $product->stock }}</th>
                  <th>{{ $product->percent_discount }}</th>
                  <th>{{ $product->created_at }}</th>
                  <th>
                    <form action="{{ route('admin.products.destroy' , $product->id) }}" method="POST" id="prepare-form">
                    @csrf
                    @method('delete')
                      <button type="submit" id="button-delete"><span class="ti-trash"></span></button>
                    </form>
                    |
                    <a href="{{ route('admin.products.edit' , $product->id)}}" id="a-black"><span class="ti-pencil"></span></a>
                  </th>
                </tr>
              @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            {{ $products->links() }}
          </ul>
        </nav>  
    </div>
</div>
<!-- Products list end -->
@endsection
