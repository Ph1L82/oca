<?php

namespace oca\Http\Controllers;

use oca\Accounts;
use Illuminate\Http\Request;
use Response;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accounts = Accounts::all();

        return Response::json([
            'data' =>   $accounts->toArray(),
            ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \oca\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Accounts $accounts)
    {
        //
        if (!$accounts->id) {
            # code...
            return Response::json([
                'error' =>  [
                    'message' => 'No se encontró la cuenta'
                    ]
                ], 404);
        }

        return Response::json([
                'data' => $accounts->toArray(),
            ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounts $accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
