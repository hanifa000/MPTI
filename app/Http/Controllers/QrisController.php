<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qris;
class QrisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qris = Qris::get();

        return view('qris.index', compact('qris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_qris/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Qris::create($input);
    
        return redirect()->route('qris.index')->with('success', 'berhasil ditambahkan');
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
        $qris = Qris::findOrFail($id);

        return view('qris.edit', compact('qris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'nullable|image', // Mengubah required menjadi nullable agar tidak wajib diisi
        ]);
    
        $qris = Qris::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_qris/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($qris->foto) {
                unlink(public_path($destinationPath . $qris->foto));
            }
            $input['foto'] = $imageName;
        }
    
        // Update data qris
        $qris->update($input);
    
        return redirect()->route('qris.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qris = Qris::findOrFail($id);
        $qris->delete();
        return redirect()->route('qris.index')->with('success', 'deleted successfully');
    }
}
