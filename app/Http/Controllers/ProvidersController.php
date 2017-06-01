<?php

namespace oca\Http\Controllers;

use oca\Provider;
use Illuminate\Http\Request;
use oca\Http\Controllers\ApiController;

class ProvidersController extends Controller
{
    use ApiController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::paginate(env('PAGINATE_SIZE'));

        if($providers->first()){
            return $this->respond($providers);
        } else{
            return $this->respondNotFound('Oops! no hay Proveedores');
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
        $provider = new Provider();
        $provider->company_name = $request->input('company_name');
        $provider->rut = $request->input('rut');
        $provider->address = $request->input('address');
        $provider->phone = $request->input('phone');
        $provider->email = $request->input('email');
        $provider->save();
        return $this->respond($provider);
    }

    /**
     * Display the specified resource.
     *
     * @param  \oca\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \oca\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \oca\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \oca\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
