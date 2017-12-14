<?php

namespace App\Units\Users\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Users\Http\Requests\CreateUserRequest;
use App\Units\Users\Http\Requests\UpdateUserRequest;
use App\Domains\Users\User;
use App\Domains\Users\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, UserRepository $user)
    {
        $data = $request->all();
				$user = $repository->create($data);

				if($user) {
					return response()->json($link);
				}

				return response()->json('Falha', 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, UserRepository $user)
    {
        $data = $user->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateUserRequest $request, UserRepository $user)
    {
        $user = $request->find($id);
				if(!$user) {
					return response()->json('Usuário não encontrado!');
				}
				
				$data = $request->all();
				$repository->update($user, $data);

				return response()->json($user);
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
