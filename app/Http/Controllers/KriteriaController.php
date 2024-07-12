<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::orderBy('created_at', 'DESC')->get();

        return view('kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kriteria::create($request->all());

        return redirect()->route('kriteria')->with('success', 'Kriteria added succesfully');
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
        $kriteria = Kriteria::find($id);
    
        if (!$kriteria) {
            return redirect()->route('kriteria')->with('error', 'Kriteria tidak ditemukan.');
        }
    
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kriteria = Kriteria::find($id);
    
        if (!$kriteria) {
            return redirect()->route('kriteria')->with('error', 'Kriteria tidak ditemukan.');
        }
    
        $kriteria->update($request->all());
    
        return redirect()->route('kriteria')->with('success', 'Kriteria berhasil diperbarui.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();

        return redirect()->route('kriteria')->with('success', 'Kriteria deleted successfully');
    }
}
