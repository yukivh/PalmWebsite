<?php

// ArtikelController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        try {
            // Mengambil data artikel dari API eksternal
            $response = Http::get('http://127.0.0.1:8001/api/artikel');
            $base_url = "http://127.0.0.1:8001/";
            // Mengecek apakah request berhasil
            if ($response->successful()) {
                // Mengambil data artikel dalam format JSON
                $artikels = $response->json();
                foreach ($artikels as &$artikel) {
                    $artikel['gambar_url'] = $base_url. $artikel['gambar'];
                }
                // Mengirim data artikel ke view
                return view('artikel', ['artikels' => $artikels]);
            } else {
                // Jika terjadi error pada API
                return response()->json(['error' => 'Gagal mengambil data dari API'], 500);
            }
        } catch (\Exception $e) {
            // Menangani exception jika ada kesalahan dalam pengambilan data
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}

