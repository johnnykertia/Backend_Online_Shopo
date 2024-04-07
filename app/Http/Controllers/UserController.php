<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table("users")->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })->paginate(5);
        return view('pages.user.index', compact('users'));
    }

    //create
    public function create()
    {
        return view('');
    }

    //store
    public function store()
    {
        return view('');
    }

    //show
    public function show($id)
    {
        return view('');
    }

    //edit
    public function edit($id)
    {
        return view('');
    }

    //destroy
    public function destroy($id)
    {
        return view('');
    }
}
