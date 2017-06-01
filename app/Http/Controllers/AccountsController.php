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
        $accounts = Account::paginate(env('PAGINATE_SIZE'));

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
        if($accounts->id){
            return $this->respond($accounts);
        }else{
            return $this->respondNotFound('Oops! no se encontró el la cuenta buscada.');
        }
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
