<?php

namespace oca\Http\Controllers;

use oca\Item;
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
        $item = new Item();
        $item->name = $request->input('name');
        $item->account_budget_id = $request->input('account_budget_id');
        $item->order_id = $request->input('order_id');
        $item->quantity = $request->input('quantity');
        $item->cost = $request->input('cost');
        $item->save();
        return $this->respond($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \oca\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
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
}
