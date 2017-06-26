<?php

namespace oca\Http\Controllers;

use oca\Budget;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;
use Auth;

class BudgetsController extends Controller
{

    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budget = Budget::where('department_id', '=', Auth::User()->department_id)->first();

        $budgets = Budget::find($budget->id)->accountsBudget;

        $budget = [
                    'department_id' =>  Budget::find($budget->id)->department->id,
                    'department'    =>  Budget::find($budget->id)->department->name,
                    'begin'         =>  $budget->begins,
                    'ends'          =>  $budget->ends,
                    'accounts'      =>  $budgets
        ];

        if ($budgets->first()) {
            # code...
            return $this->respond($budget);
        }
        else{
            # code...
            return $this->respondNotFound('Oops! no hay Presupuestos');
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
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budgets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budgets)
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
    public function update(Request $request, Budget $budgets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budgets)
    {
        //
    }
}
