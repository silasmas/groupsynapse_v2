<?php

namespace App\Http\Controllers;

use App\Models\favorie;
use App\Http\Requests\StorefavorieRequest;
use App\Http\Requests\UpdatefavorieRequest;

class FavorieController extends Controller
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
    public function store(StorefavorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(favorie $favorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favorie $favorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefavorieRequest $request, favorie $favorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favorie $favorie)
    {
        //
    }
}
