<?php

namespace App\Http\Controllers;

use App\Models\InsuranceInformation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceInformationRequest;
use App\Http\Requests\UpdateInsuranceInformationRequest;

class InsuranceInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInsuranceInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceInformation $insuranceInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsuranceInformation $insuranceInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInsuranceInformationRequest $request, InsuranceInformation $insuranceInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceInformation $insuranceInformation)
    {
        //
    }
}
