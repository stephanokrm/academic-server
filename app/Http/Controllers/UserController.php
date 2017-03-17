<?php

namespace AcademicServer\Http\Controllers;

use AcademicServer\User;
use Illuminate\Http\Request;
use AcademicServer\Http\Requests\UsersStoreRequest;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \AcademicServer\Http\Requests\UsersStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @return \AcademicServer\User
     */
    public function show()
    {
        $user = request()->user();
        return response()->json(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \AcademicServer\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \AcademicServer\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \AcademicServer\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
