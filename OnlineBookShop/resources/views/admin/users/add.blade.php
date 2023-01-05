@extends('admin.layouts.app')

@section('content')
{{-- Add user form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Name" aria-label="name">
                </div>
                <div class="col">
                  <input type="email" class="form-control" placeholder="Email" aria-label="email">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Password" aria-label="password">
                </div>
                <div class="col">
                    <select id="inputState" class="form-control">
                        <option>User</option>
                        <option>Admin</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Phone number" aria-label="phone-number">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Addres" aria-label="addres">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Add User</button>
        </div>
    </div>
</div>
{{-- Add user form end --}}
@endsection