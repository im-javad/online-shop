@extends('admin.layouts.app')

@section('title' , 'Admin-Users')

@section('content')
<!-- Users list start -->
<div class="main-content-inner">
    <div class="row">
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Number</th>
                <th>Address</th>
                <th>Joined</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th>{{ $user->id }}</th>
                  <th>{{ $user->name }}</th>
                  <th>{{ $user->email }}</th>
                  <th>{{ $user->role }}</th>
                  <th>{{ $user->phone_number }}</th>
                  <th>{{ $user->address }}</th>
                  <th>{{ $user->created_at }}</th>
                  <th>
                    <form action="{{ route('admin.users.destroy' , $user->id ) }}" method="POST" id="prepare-form">
                      @csrf
                      @method('delete')
                        <button type="submit" id="button-delete"><span class="ti-trash"></span></button>
                    </form>
                    |
                    <a href="{{ route('admin.users.edit' , $user->id) }}" id="a-black"><span class="ti-pencil"></span></a>
                  </th>
                </tr>
              @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            {{ $users->links() }}
          </ul>
        </nav>  
    </div>
</div>
<!-- Users list end -->
@endsection

