<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Traits\HasUser;
use Illuminate\Http\Request;

class UserController extends Controller{
    use HasUser;
    
    /**
     * Show users list
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $users = User::paginate(10);

        return view('admin.frontend.users.list' , compact('users'));
    }

    /**
     * Show form for creating a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.frontend.users.add');
    }

    /**
     * Store a new created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = $this->validateAddForm($request);

        $this->doStore($validator);

        return redirect()->route('admin.users.all')->with('simpleSuccessAlert' , 'User added successfully');
    }

    /**
     * Show form for editing the specified user.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user){
        return view('admin.frontend.users.edit' , compact('user'));
    }

    /**
     * Update specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        $validator = $this->validateUpdateForm($request);

        $this->doUpdate($user , $validator);

        return redirect()->route('admin.users.all')->with('simpleSuccessAlert' , 'User updated successfully');
    }

    /**
     * Remove specified user from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){
        $user->delete();

        return back()->with('simpleSuccessAlert' , 'User removed successfully');
    }
}

