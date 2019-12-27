<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $hashpass = Hash::make($request->password);
        $user->password = $hashpass;
        $user->user_role = $request->user_role;
        $user->active = $request->active;
        $permission = serialize($request->product_permission);
        $user->product_permission = $permission;
        $user->created_on = time();
        $user->updated_on = time();
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $hashpass = Hash::make($request->password);
        $user->password = $hashpass;
        $user->user_role = $request->user_role;
        $user->active = $request->active;
        $permission = serialize($request->product_permission);
        $user->product_permission = $permission;
        // $user->created_on = time();
        $user->updated_on = time();
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
