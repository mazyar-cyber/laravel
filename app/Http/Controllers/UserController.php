<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $user->name = "mazyar";
        $user->email = "mazyarmg7731@gmaill.com";
        $user->password = "mazyarmg7731@gmail.com";
        $user->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getUsers()
    {
        return User::all();
    }

    public function updater($id)
    {
        $user = User::find($id);
        $user->name = "ali";
        $user->email = "mohamadi";
        $user->password = "hashbymd5";
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
    }

    public function trash()
    {
        $user = User::withTrashed()->get();
        return $user;
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->where('id', $id)->forceDelete();
    }

    public function restore($id)
    {
        $user = User::withTrashed()->where('id', $id)->restore();
        $user=User::all();
        return $user;
    }
}
