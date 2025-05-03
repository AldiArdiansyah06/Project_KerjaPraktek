<?php

namespace App\Http\Controllers;

use App\Models\ProgessPengguna;
use App\Http\Requests\StoreProgessPenggunaRequest;
use App\Http\Requests\UpdateProgessPenggunaRequest;
use App\Models\Modul;
use App\Models\Soal;
use Illuminate\Http\Request;

class ProgessPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls = Modul::all(); // Menampilkan semua modul yang ada
        $soals = Soal::all(); // Menampilkan semua soal yang ada

        return response()->json([
            'moduls' => $moduls,
            'soals' => $soals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            'message' => 'Form untuk membuat soal baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'modul_id' => 'required|exists:moduls,id',
            'soal_id' => 'required|exists:soals,id',
            'jawaban_pengguna' => 'required|in:A,B,C,D',
        ]);

        // Menyimpan progres jawaban pengguna
        $progress = new ProgessPengguna();
        $progress->user_id = $request->user_id;
        $progress->modul_id = $request->modul_id;
        $progress->soal_id = $request->soal_id;
        $progress->jawaban_pengguna = $request->jawaban_pengguna;

        // Mendapatkan soal untuk memeriksa jawaban
        $soal = Soal::find($request->soal_id);

        // Menilai jawaban
        $progress->nilai = ($soal->jawaban_benar == $request->jawaban_pengguna) ? 1 : 0;

        // Set status soal sebagai selesai
        $progress->status = 'selesai';
        $progress->save();

        return response()->json([
            'message' => 'Jawaban telah disimpan dan dinilai.',
            'nilai' => $progress->nilai
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show($progressId)
    {
        // Menampilkan progres berdasarkan ID
        $progress = ProgessPengguna::findOrFail($progressId);

        return response()->json([
            'progress' => $progress
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($progressId)
    {
        // Menampilkan data progres pengguna untuk diedit
        $progress = ProgessPengguna::findOrFail($progressId);

        return response()->json([
            'progress' => $progress,
            'message' => 'Form untuk mengedit jawaban pengguna'
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $progressId)
    {
        // Validasi input
        $validated = $request->validate([
            'jawaban_pengguna' => 'required|in:A,B,C,D',
        ]);

        // Temukan progress pengguna berdasarkan ID
        $progress = ProgessPengguna::findOrFail($progressId);
        $progress->jawaban_pengguna = $request->jawaban_pengguna;

        // Mendapatkan soal untuk memeriksa jawaban
        $soal = Soal::find($progress->soal_id);

        // Menilai jawaban
        $progress->nilai = ($soal->jawaban_benar == $request->jawaban_pengguna) ? 1 : 0;

        // Simpan perubahan
        $progress->save();

        return response()->json([
            'message' => 'Jawaban berhasil diperbarui dan dinilai.',
            'nilai' => $progress->nilai
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($progressId)
    {
        // Temukan dan hapus progress berdasarkan ID
        $progress = ProgessPengguna::findOrFail($progressId);
        $progress->delete();

        return response()->json([
            'message' => 'Jawaban pengguna berhasil dihapus.'
        ]);
    }
}
