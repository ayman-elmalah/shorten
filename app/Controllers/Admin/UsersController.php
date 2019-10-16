<?php

namespace App\Controllers\Admin;

use App\Models\User;
use Phplite\Http\Request;
use Phplite\Session\Session;
use Phplite\Validation\Validate;

class UsersController {
    /**
     * Show list of users
     *
     * @return \Phplite\View\View
     */
    public function index() {
        $users = User::get();
        $title = "Users";

        return view('admin.users.index', ['users' => $users, 'title' => $title]);
    }

    /**
     * Create new user
     *
     * @return \Phplite\View\View
     */
    public function create() {
        $title = "Create new user";

        return view('admin.users.create', ['title' => $title]);
    }

    /**
     * Store new user
     *
     * @return \Phplite\Url\Url
     */
    public function store() {
        Validate::validate([
            'first_name' => 'required|min:2|max:30',
            'last_name' => 'required|min:2|max:30',
            'user_name' => 'required|min:2|max:30|unique:users,user_name',
            'password' => 'required|min:6|max:50',
        ], false);

        User::insert([
            'first_name' => Request::post('first_name'),
            'last_name' => Request::post('last_name'),
            'user_name' => Request::post('user_name'),
            'password' => password_hash(Request::post('password'), PASSWORD_BCRYPT)
        ]);

        Session::set('message', "The users is created successfully");
        return redirect(url('admin-panel/users'));
    }

    /**
     * Edit user by the given id
     *
     * @param string $id
     * @return \Phplite\View\View
     */
    public function edit($id) {
        $user = User::where('id', '=', $id)->first();
        if (! $user) {
            Session::set('message', 'The users is not found');
            return redirect(url('admin-panel/users'));
        }

        $title = "Edit " . $user->first_name;
        return view('admin.users.edit', ['user' => $user, 'title' => $title]);
    }

    /**
     * Update existing user
     *
     * @param string $id
     * @return \Phplite\Url\Url
     */
    public function update($id) {
        $user = User::where('id', '=', $id)->first();
        if (! $user) {
            Session::set('message', 'The user is not found');
            return redirect(url('admin-panel/users'));
        }

        Validate::validate([
            'first_name' => 'required|min:2|max:30',
            'last_name' => 'required|min:2|max:30',
            'user_name' => 'required|min:2|max:30|unique:users,user_name,'.$user->user_name,
            'password' => 'min:6|max:50',
        ], false);

        $data = [
            'first_name' => Request::post('first_name'),
            'last_name' => Request::post('last_name'),
            'user_name' => Request::post('user_name')
        ];
        $data = (Request::post('password')) ? array_merge($data, ['password' => password_hash(Request::post('password'), PASSWORD_BCRYPT)]) : $data;

        User::where('id', '=', $id)->update($data);

        Session::set('message', "The user is updated successfully");
        return redirect(url('admin-panel/users'));
    }

    /**
     * Delete existing user
     *
     * @param string $id
     * @return \Phplite\Url\Url
     */
    public function delete($id) {
        $user = User::where('id', '=', $id)->first();
        if (! $user) {
            Session::set('message', 'The user is not found');
            return redirect(url('admin-panel/users'));
        }

        User::where('id', '=', $id)->delete();
        Session::set('message', 'The user is deleted successfully');
        return redirect(url('admin-panel/users'));
    }
}