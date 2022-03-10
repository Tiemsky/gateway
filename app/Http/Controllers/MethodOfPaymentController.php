<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMethodOfPaymentRequest;
use App\Http\Requests\UpdateMethodOfPaymentRequest;
use App\Models\MethodOfPayment;

class MethodOfPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMethodOfPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMethodOfPaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MethodOfPayment  $methodOfPayment
     * @return \Illuminate\Http\Response
     */
    public function show(MethodOfPayment $methodOfPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MethodOfPayment  $methodOfPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(MethodOfPayment $methodOfPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMethodOfPaymentRequest  $request
     * @param  \App\Models\MethodOfPayment  $methodOfPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMethodOfPaymentRequest $request, MethodOfPayment $methodOfPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MethodOfPayment  $methodOfPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(MethodOfPayment $methodOfPayment)
    {
        //
    }
}
