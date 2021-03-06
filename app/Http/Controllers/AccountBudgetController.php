<?php

namespace oca\Http\Controllers;

use oca\Account_Budget;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;

class AccountBudgetController extends Controller
{
    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account_budget = Account_Budget::paginate(env('PAGINATE_SIZE'));

        if($account_budget->first()){
            return $this->respond($account_budget);
        } else{
            return $this->respondNotFound('Oops! no hay Cuentas de Presupuesto');
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
     * @param  \oca\Account_Budget  $account_Budget
     * @return \Illuminate\Http\Response
     */
    public function show(Account_Budget $account_Budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Account_Budget  $account_Budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Account_Budget $account_Budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Account_Budget  $account_Budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account_Budget $account_Budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Account_Budget  $account_Budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account_Budget $account_Budget)
    {
        //
    }
}
