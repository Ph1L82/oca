<?php

namespace oca\Http\Controllers;

use oca\Payment_Method;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;

class PaymentMethodsController extends Controller
{
    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods = Payment_Method::paginate(env('PAGINATE_SIZE'));

        if($payment_methods->first()){
            return $this->respond($payment_methods);
        } else{
            return $this->respondNotFound('Oops! no hay Medios de Pago');
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
     * @param  \oca\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Method $payment_Method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Method $payment_Method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_Method $payment_Method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Method $payment_Method)
    {
        //
    }
}
