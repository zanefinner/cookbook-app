<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return views('user.index');
    }
    public function create(Request $req)
    {
        //create
        redirect('/users/signin');
    }
    public function read($id)
    {
        $data;//based on id
        return view('users.read', ['data'=>$data]);
    }
    public function update()
    {
        //change pass or something
        redirect('/');
    }
    public function delete()
    {
        //delete user
        redirect('/');
    }
}
