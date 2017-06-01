<?php

namespace oca\Http\Controllers;

use oca\Account;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;

class AccountsController extends Controller
{
    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD
        $accounts = Accounts::all()->paginate(25);
=======
        $accounts = Account::paginate(env('PAGINATE_SIZE'));
>>>>>>> bb63a11346bff92197f62025e831b6809af5f2a5

        if($accounts->first()){
            return $this->respond($accounts);
        } else{
            return $this->respondNotFound('Oops! no hay Ordenes de Compra');
        }
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
    public function show(Account $accounts)
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
    public function edit(Account $accounts)
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
    public function update(Request $request, Account $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $accounts)
    {
        //
    }
}
