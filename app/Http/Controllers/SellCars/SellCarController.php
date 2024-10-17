<?php

namespace App\Http\Controllers\SellCars;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellCars\SellCarRequest;
use App\Models\SellCar;
use App\Models\User;
use Illuminate\Http\Request;

class SellCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.sell-car');
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
    public function store(SellCarRequest $request)
    {
        $user = User::create($request->validated());
        $sellCar = SellCar::create(array_merge($request->validated(), ['user_id' => $user->id]));
        return redirect()->route('sellcars.index')->with('success', 'Your car has been added for sale successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}