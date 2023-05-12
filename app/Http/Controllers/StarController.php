<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStarRequest;
use App\Http\Requests\UpdateStarRequest;
use App\Models\Star;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Star::all();
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
    public function store(Request $request)
    {
        $star = Star::create([
            'name' => $request->name,
            'firstName' => $request->firstName,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return $star;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $star = Star::where('id', $id)->get();
        return $star;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Star $star)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $star = Star::find($id);
        $star->fill($request->all());
        $star->save();
        return $star;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Star::destroy($id);
    }
}
