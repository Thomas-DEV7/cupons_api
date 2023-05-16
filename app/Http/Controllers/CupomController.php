<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupom;

class CupomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cupom::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        Cupom::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cupom::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Cupom::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cupom = Cupom::findOrfail($id);
        $cupom->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cupom = Cupom::findOrFail($id);
        $cupom->delete();
    }
}
