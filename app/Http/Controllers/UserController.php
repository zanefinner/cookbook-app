<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App;
class UserController extends Controller
{
    public function index()
    {
        return views('user.index');
    }
    public function create(Request $req)
    {
        $c = new Recipes;
        $c->store(
            $req->input('name'),
            json_encode ($req->input ('ingredients') ),
            $req->input('description')

        );
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
