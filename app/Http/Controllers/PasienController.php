<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumahsakits = Rumahsakit::orderBy('nama')->get();
        $pasiens = Pasien::orderBy('nama')->paginate(10);
        return view('pasien.index', [
            'pasiens' => $pasiens,
            'rumahsakits' => $rumahsakits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::orderBy('nama')->get();
        $rumahsakits = Rumahsakit::orderBy('nama')->get();
        return view('pasien.create', [
            'pasiens' => $pasiens,
            'rumahsakits' => $rumahsakits,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|alpha_num',
            'rumahsakit_id' => 'required|exists:App\Models\Rumahsakit,id'
        ]);

        Pasien::create($validateData);
        return redirect(route('pasiens.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $rumahsakits = Rumahsakit::orderBy('nama')->get();
        return view('pasien.edit', [
            'rumahsakits' => $rumahsakits,
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|alpha_num',
            'rumahsakit_id' => 'required|exists:App\Models\Rumahsakit,id'
        ]);

        $pasien->update($validateData);
        return redirect(route('pasiens.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {

    }

    public function deleteData($id)
    {
        Pasien::where('id', $id)->delete();
        return redirect(route('pasiens.index'));
    }

    public function filter(Request $request)
    {
        $query = Pasien::with('rumahsakit');

        if ($request->has('rumahsakit_id') && $request->rumahsakit_id != '') {
            $query->where('rumahsakit_id', $request->rumahsakit_id);
        }

        $pasiens = $query->get();

        $html = '';
        foreach ($pasiens as $pasien) {
        $html .= '<tr>
            <td><a href="' . route('pasiens.show', $pasien->id) . '" class="nama-table">' . $pasien->nama . '</a></td>
            <td>' . $pasien->alamat . '</td>
            <td>' . $pasien->telepon . '</td>
            <td>' . $pasien->rumahsakit->nama . '</td>
            <td>
                <a href="' . route('pasiens.edit', $pasien->id) . '" class="btn-edit">Edit</a>
                <a href="" class="deleteData btn-delete" data-id="' . $pasien->id . '">Delete</a>
            </td>
        </tr>';
        }
        return response()->json(['html' => $html]);
    }
}