<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect(route('users.index'))->with('success', Lang::get('menubar.users_succ'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect(route('users.index'))->with('success', Lang::get('menubar.users_not_found'));
        }
        return view('admin.users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect(route('users.index'))->with('success', Lang::get('menubar.users_not_found'));
        }
        return view('admin.users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        if (empty($users)) {
            return redirect(route('users.index'))->with('success', Lang::get('menubar.users_not_found'));
        }
        $users->update($input);
        return redirect(route('users.index'))->with('success', Lang::get('menubar.users_up'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect(route('users.index'))->with('success', Lang::get('menubar.users_not_found'));
        }
        $users->delete();
        return redirect(route('sliders.index'))->with('success', Lang::get('menubar.users_del'));
    }
}
