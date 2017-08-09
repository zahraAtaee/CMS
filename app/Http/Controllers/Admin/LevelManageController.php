<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LevelManageRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles=Role::latest()->with('users')->paginate('25');

        return view('Admin.levelAdmins.all',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::whereLevel('admin')->get();

        return view('Admin.levelAdmins.create',compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LevelManageRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelManageRequest $request)
    {
        User::find($request->input('user_id'))->roles()->sync($request->input('role_id'));

        return redirect(route('level.index'));

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
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(User $user)
    {
        $roles=Role::all();
        $selectRole=User::find($user->id)->roles()->first();


        return view('Admin.LevelAdmins.edit',compact('user','roles','selectRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LevelManageRequest|Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(LevelManageRequest $request, User $user)
    {

        $user->roles()->sync($request->input('role_id'));

        return redirect(route('level.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        return redirect(route('level.index'));
    }
}
