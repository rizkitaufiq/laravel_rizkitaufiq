<?php

namespace App\Http\Controllers;

use App\Http\Requests\RumahSakitRequest;
use App\Services\RumahSakitService;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function __construct(private RumahSakitService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->service->getAll();
        return view('admin.hospital.index', compact('data'));
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
    public function store(RumahSakitRequest $request)
    {
        $this->service->store($request->validated());
        return back()->with('success', 'Data berhasil ditambahkan');
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
    public function edit(RumahSakit $hospital)
    {
        return view('admin.hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RumahSakitRequest $request, RumahSakit $hospital)
    {
        $this->service->update($hospital, $request->validated());
        return back()->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hospital = RumahSakit::findOrFail($id);
        $hospital->delete();

        return response()->json(['message' => 'Berhasil dihapus']);
    }
}
