<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DetailArtikelController extends Controller
{
    public function show($id)
    {
        try {
            // URL API untuk mengambil data artikel berdasarkan ID
            $response = Http::get('http://127.0.0.1:8001/api/artikel/' . $id);

            // Mengecek apakah request berhasil
            if ($response->successful()) {
                // Mengambil data artikel dalam format JSON
                $artikel = $response->json();


                $artikel['gambar_url'] = $artikel['gambar'];              
                // Mengirim data artikel ke view
                return view('isi_artikel', ['artikel' => $artikel]);
            } else {
                // Jika terjadi error pada API
                return response()->json(['error' => 'Gagal mengambil data artikel'], 500);
            }
        } catch (\Exception $e) {
            // Menangani exception jika ada kesalahan dalam pengambilan data
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
