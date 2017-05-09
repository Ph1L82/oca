<?php

namespace oca\Http\Controllers;

use oca\Budgets;
use Illuminate\Http\Request;

class BudgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Budgets::all();
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
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function show(Budgets $budgets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function edit(Budgets $budgets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budgets $budgets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budgets $budgets)
    {
        //
    }
}
