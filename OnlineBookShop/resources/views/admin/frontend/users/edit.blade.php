@extends('admin.layouts.app')

@section('title' , 'Admin-Edit user')

@section('content')
{{-- Edit user form start --}}
<div class="col-12 mt-5">
    <div class="card">
        <form action="{{ route('admin.users.update' , $user->id) }}" method="POST">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <input value="{{ $user->name }}" name="name" type="text" class="form-control" placeholder="Name" aria-label="name">
                    </div>
                    <div class="col">
                        <input value="{{ $user->email }}" name="email" type="email" class="form-control" placeholder="Email" aria-label="email">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <input value="{{ $user->password }}" name="password" type="password" class="form-control" placeholder="Password" aria-label="password">
                    </div>
                    <div class="col">
                        <select name="role" id="inputState" class="form-control">
                            <option value="user" {{ ($user->role === 'user') ? 'selected' : ''}}>User</option>
                            <option value="admin" {{ ($user->role === 'admin') ? 'selected' : ''}}>Admin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <input value="{{ $user->phone_number }}" name="phone-number" type="numeric" class="form-control" placeholder="Phone number" aria-label="phone-number">
                    </div>
                    <div class="col">
                        <input value="{{ $user->address }}" name="address" type="text" class="form-control" placeholder="Address" aria-label="address">
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Edit User</button>
            </div>
        </form>
    </div>
</div>
{{-- Edit user form end --}}
@endsection