<?php

namespace App\Http\Controllers;

use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumahsakits = Rumahsakit::orderBy('nama')->paginate(8);
        return view('rumahsakit.index', [
            'rumahsakits' => $rumahsakits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rumahsakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
        ]);

        Rumahsakit::create($validateData);
        return redirect(route('rumahsakits.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Rumahsakit $rumahsakit)
    {
        return view('rumahsakit.show', compact('rumahsakit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rumahsakit $rumahsakit)
    {
        return view('rumahsakit.edit', compact('rumahsakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rumahsakit $rumahsakit)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|alpha_num'
        ]);

        $rumahsakit->update($validateData);
        return redirect(route('rumahsakits.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rumahsakit $rumahsakit)
    {
        
    }

    public function deleteData($id)
    {
        Rumahsakit::where('id', $id)->delete();
        return redirect(route('rumahsakits.index'));
    }
}
