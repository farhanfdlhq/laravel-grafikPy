<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    private $apiUrl = 'http://127.0.0.1:5000/api/pariwisata/';

    public function jenisUsaha()
    {
        $response = Http::get($this->apiUrl . 'jenis_usaha');
        $data = $response->json();
        return view('dashboard.jenis_usaha', ['data' => $data]);
    }

    public function kecamatan()
    {
        $response = Http::get($this->apiUrl . 'kecamatan');
        $data = $response->json();
        return view('dashboard.kecamatan', ['data' => $data]);
    }

    public function wilayah()
    {
        $response = Http::get($this->apiUrl . 'wilayah');
        $data = $response->json();
        return view('dashboard.wilayah', ['data' => $data]);
    }

    public function sebaranJenisUsahaPerKecamatan()
    {
        $response = Http::get($this->apiUrl . 'sebaran_jenis_usaha_per_kecamatan');
        $data = $response->json();
        return view('dashboard.sebaran_jenis_usaha_per_kecamatan', ['data' => $data]);
    }

    public function sebaranKecamatanPerWilayah()
    {
        $response = Http::get($this->apiUrl . 'sebaran_kecamatan_per_wilayah');
        $data = $response->json();
        return view('dashboard.sebaran_kecamatan_per_wilayah', ['data' => $data]);
    }

    public function sebaranJenisUsahaPerWilayah()
    {
        $response = Http::get($this->apiUrl . 'sebaran_jenis_usaha_per_wilayah');
        $data = $response->json();
        return view('dashboard.sebaran_jenis_usaha_per_wilayah', ['data' => $data]);
    }
}
