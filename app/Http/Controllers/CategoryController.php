<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = \App\Models\Category::paginate(5);
        return view('pages.category.index', compact('categories'));
    }

    // //create
    // public function create()
    // {
    //     return view('pages.user.create');
    // }

    // //store
    // public function store(Request $request)
    // {
    //     $data = $request->all();
    //     $data['password'] = Hash::make($request->input('password'));
    //     User::create($data);
    //     return redirect()->route('user.index');
    // }

    // //show
    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('pages.user.edit', compact('user'));
    // }

    // //edit
    // public function update(Request $request, $id)
    // {
    //     $data = $request->all();
    //     $user = User::findOrFail($id);

    //     if ($request->input('password')) {
    //         $data['password'] = Hash::make($request->input('password'));
    //     } else {
    //         $data['password'] = $user->password;
    //     }

    //     $user->update($data);
    //     return redirect()->route('user.index');
    // }

    // //destroy
    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();
    //     return redirect()->route('user.index');
    // }
}
