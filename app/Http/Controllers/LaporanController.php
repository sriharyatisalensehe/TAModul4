<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Menampilkan form input laporan
    public function create()
    {
        return view('form'); // mengarah ke resources/views/form.blade.php
    }

    // Menyimpan data dari form ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create($request->all());

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil disimpan!');
    }

    // Menampilkan daftar laporan dari database
    public function index()
    {
        $laporans = Laporan::all();
        return view('daftarLaporan', compact('laporans')); // sesuaikan dengan nama file view tabel Anda
    }
}