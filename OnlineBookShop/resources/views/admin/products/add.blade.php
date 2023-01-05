@extends('admin.layouts.app')

@section('content')
{{-- Add product form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <select class="form-control">
                        <option>T-shirt</option>
                        <option>Suit</option>
                        <option>Pants</option>
                    </select>
                </div>
                <div class="col">
                  <input type="email" class="form-control" placeholder="Title" aria-label="title">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <textarea class="form-control" placeholder="Description" rows="1"></textarea>
                </div>
                <div class="col">
                    <input class="form-control" type="file">
                </div>
                <div class="col">
                    <input class="form-control" placeholder="Price" type="numeric" aria-label="price">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Add product</button>
        </div>
    </div>
</div>
{{-- Add product form end --}}
@endsection

