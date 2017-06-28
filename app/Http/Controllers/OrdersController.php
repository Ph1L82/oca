<?php

namespace oca\Http\Controllers;

use oca\Order;
use oca\Department;
use oca\Company;
use oca\Account_Budget;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;
use Auth;
use Carbon\Carbon;

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
        $orders = Order::where('approved', '=', null)
                    ->where('disapproved', '=', null)
                    ->paginate(env('PAGINATE_SIZE'));

        if($orders->first()){
            return $this->respond($orders);
        } else{
            return $this->respondNotFound('Oops! no hay Ordenes de Compra');
        }

    }

    public function byDay(Request $request)
    {
        $orders = Order::whereCreatedAt($request->input('day'))
                    ->where('approved', '=', null)
                    ->where('disapproved', '=', null)
                    ->paginate(env('PAGINATE_SIZE'));

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
        //$items = $order->items()->get();
        //$provider = $order->provider()->get();
        $department = Department::find($order->author()->first()->department)->first();
        $company = Company::find($department->company_id)->first();

        $author = [ 'name' => $order->author()->first()->name,
                    'email' => $order->author()->first()->email,
                    'department' => $department->name,
                    'company' => $company->company_name
                ];
        $result = [
                    'orderId' => $order->id,
                    'author' => $author,
                    'created_at' => date_format($order->created_at, 'Y-m-d H:i:s'),
                    'provider' => $order->provider,
                    'description' => $order->description,
                    'approved_by' => $order->approved_by,
                    'approved' => $order->approved,
                    'disapproved' => $order->disapproved,
                    'disapproved_by' => $order->disapproved_by,
                    'items' => $order->items,
                ];
        return $this->respond($result);
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

    public function approve(Order $order)
    {
        if ((Auth::User()->role == 'firmante') && ($order->approved == null || $order->disapproved == null)) {
            # code...
            foreach ($order->items as $item) {
                # code...
                $accountBudget = Account_Budget::find($item->account_budget_id);
                $accountBudget->balance = $accountBudget->balance - ($item->cost * $item->quantity);
                $accountBudget->save();
            }
            $order->approved = Carbon::now();
            $order->approved_by = Auth::User()->id;
            $order->save();
            $this->show($order);
        } else{
            return $this->respondUnauthorized();
        }
    }

    public function disapprove(Order $order)
    {
        if ((Auth::User()->role == 'firmante') && ($order->disapproved == null || $order->approved == null)){
            # code...
            $order->disapproved = Carbon::now();
            $order->disapproved_by = Auth::User()->id;
            $order->save();
            $this->show($order);
        } else{
            return $this->respondUnauthorized();
        }
    }
}
