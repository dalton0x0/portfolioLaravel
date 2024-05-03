<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PeriodFormrequest;
use App\Models\Admin\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.periods.index', ['periods' => Period::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $period = new Period();
        return view('admin.periods.form', ['period' => $period]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeriodFormrequest $request)
    {

        $period = Period::create($request->validated());
        return to_route('admin.periods.index')->with('success', 'La période a été créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Period $period)
    {
        return view('admin.periods.form', ['period' => $period]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PeriodFormrequest $request, Period $period)
    {
        $period->update($request->validated());
        return to_route('admin.periods.index')->with('success', 'La période a été modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        $period->delete();
        return to_route('admin.periods.index')->with('danger', 'La période a été supprimée avec succès');
    }
}
