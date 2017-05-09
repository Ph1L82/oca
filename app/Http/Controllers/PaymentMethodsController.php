<?php

namespace oca\Http\Controllers;

use oca\Payment_Methods;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Payment_Methods::all();
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
     * @param  \oca\Payment_Methods  $payment_Methods
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Methods $payment_Methods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Payment_Methods  $payment_Methods
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Methods $payment_Methods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Payment_Methods  $payment_Methods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_Methods $payment_Methods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Payment_Methods  $payment_Methods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Methods $payment_Methods)
    {
        //
    }
}
