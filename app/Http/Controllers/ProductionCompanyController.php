<?php

namespace App\Http\Controllers;

use App\Models\ProductionCompany;
use Illuminate\Http\Request;

class ProductionCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('production_companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('production_companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            //code;
        ]);

        $productionCompany = ProductionCompany::create($data);
        return redirect()->route('production_companies.show', $productionCompany->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductionCompany  $productionCompany
     * @return \Illuminate\Http\Response
     */
    public function show(ProductionCompany $productionCompany)
    {
        return view('production_companies.show', compact('productionCompany'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductionCompany  $productionCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductionCompany $productionCompany)
    {
        return view('production_companies.edit', compact('productionCompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductionCompany  $productionCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductionCompany $productionCompany)
    {
        $data = $request->validate([
            //code
        ]);
        $productionCompany->update($data);
        return redirect()->route('production_companies.show', $productionCompany->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductionCompany  $productionCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductionCompany $productionCompany)
    {
        $productionCompany->delete();
        return redirect()->route('production_companies.index');
    }
}
