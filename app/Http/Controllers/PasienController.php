<?php

namespace App\Http\Controllers;

use App\Http\Requests\{PasienRequest, StorePasienRequest, UpdatePasienRequest};
use App\Models\Pasien;
use App\Models\RumahSakit;
use App\Services\PasienService;

class PasienController extends Controller
{
    protected PasienService $pasienService;

    public function __construct(PasienService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pasien::with('rumahSakit')->get();
        $rumahSakits = RumahSakit::all();
        return view('admin.patient.index', compact('data', 'rumahSakits'));
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
    public function store(PasienRequest $request)
    {
        $this->service->store($request->validated());
        return redirect()->back()->with('success', 'Pasien berhasil ditambahkan.');
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
    public function edit(Pasien $patient)
    {
        $rumahSakitList = RumahSakit::all();
        return view('admin.patient.edit', compact('patient', 'rumahSakitList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        $this->service->update($pasien, $request->validated());
        return redirect()->back()->with('success', 'Pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return response()->json(['message' => 'Berhasil dihapus']);
    }
}
