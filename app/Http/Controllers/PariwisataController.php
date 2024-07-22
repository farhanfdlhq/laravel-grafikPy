<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PariwisataController extends Controller
{
    private $baseUrl = 'http://localhost:5000/api';

    public function showPariwisataPage()
    {
        return view('pariwisata');
    }

    public function getPariwisataData()
    {
        $response = Http::get($this->baseUrl . '/pariwisata');

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], $response->status());
        }
    }

    public function getJenisUsahaData()
    {
        return $this->fetchData('/pariwisata/jenis_usaha');
    }

    public function getKecamatanData()
    {
        return $this->fetchData('/pariwisata/kecamatan');
    }

    public function getWilayahData()
    {
        return $this->fetchData('/pariwisata/wilayah');
    }

    public function getSebaranJenisUsahaPerKecamatan()
    {
        return $this->fetchData('/pariwisata/sebaran_jenis_usaha_per_kecamatan');
    }

    public function getSebaranKecamatanPerWilayah()
    {
        return $this->fetchData('/pariwisata/sebaran_kecamatan_per_wilayah');
    }

    public function getSebaranJenisUsahaPerWilayah()
    {
        return $this->fetchData('/pariwisata/sebaran_jenis_usaha_per_wilayah');
    }

    private function fetchData($endpoint)
    {
        $response = Http::get($this->baseUrl . $endpoint);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Unable to fetch data'], $response->status());
        }
    }
}
