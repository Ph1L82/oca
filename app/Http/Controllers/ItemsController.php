<?php

namespace oca\Http\Controllers;

use oca\Item;
use oca\Order;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;

class ItemsController extends Controller
{
    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(env('PAGINATE_SIZE'));

        if($items->first()){
            return $this->respond($items);
        } else{
            return $this->respondNotFound('Oops! no hay Items de Orden de Compra');
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
        if ($this->checkOrder($request->input('order_id'))) {
            $item = new Item();
            $item->name = $request->input('name');
            $item->account_budget_id = $request->input('account_budget_id');
            $item->order_id = $request->input('order_id');
            $item->quantity = $request->input('quantity');
            $item->cost = $request->input('cost');
            $item->save();
            return $this->respond($item);
        } else{
            return $this->respondBadRequest();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \oca\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        if($item->id){
            return $this->respond($item);
        }else{
            return $this->respondNotFound('Oops! no se encontró el item buscado.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    public function checkOrder($order_id)
    {
        if ($order = Order::findOrFail($order_id)){
            if ((is_null($order->approved)) && (is_null($order->disapproved))) {
                return true;
            } else {
                return false;
            }
        } else {
            return $this->respondBadRequest('Order : ' . $order_id . ' doesn\'t exists.');
        }
    }
}
