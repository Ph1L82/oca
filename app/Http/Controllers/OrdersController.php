<?php

namespace oca\Http\Controllers;

use oca\Order;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;
use Auth;

class OrdersController extends Controller
{

    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(env('PAGINATE_SIZE'));

        if($orders->first()){
            return $this->respond($orders);
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
        $order = new Order();
        $order->provider_id = $request->input('provider_id');
        $order->payment_id = $request->input('payment_id');
        $order->description = $request->input('description');
        $order->author = Auth::User()->id;
        $order->save();
        return $this->respond($order);

    }

    /**
     * Display the specified resource.
     *
     * @param  \oca\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        return $this->respond($order->provider());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
