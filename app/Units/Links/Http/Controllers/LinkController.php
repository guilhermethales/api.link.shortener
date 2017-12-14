<?php

namespace App\Units\Links\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Links\Http\Requests\CreateLinkRequest;
use App\Domains\Links\Link;
use App\Domains\Links\Repositories\LinkRepository;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Link::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLinkRequest $request, LinkRepository $repository)
    {
				$data = $request->all();
				$link = $repository->create($data);

				if($link) {
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
        //
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
