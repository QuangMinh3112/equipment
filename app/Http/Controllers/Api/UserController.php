<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'desc')->with('createdBy')->get();
        return response()->json(['data' => $users, 'status' => 'Success'], 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->full_name = $request->full_name;
        $user->account_code = $request->account_code;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->identity_card = $request->identity_card;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->user_name = $request->user_name;
        $user->status = 1;
        $user->created_by = 1;
        if ($user->save()) {
            return response()->json(['message' => 'Success', 200]);
        } else {
            return response()->json(['message' => 'Fail', 404]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
