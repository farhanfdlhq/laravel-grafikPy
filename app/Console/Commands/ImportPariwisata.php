<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pariwisata;
use Illuminate\Support\Facades\File;

class ImportPariwisata extends Command
{
    protected $signature = 'import:pariwisata';
    protected $description = 'Import data pariwisata from JSON file';

    public function handle()
    {
        $json = File::get('pariwisata.json');
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Pariwisata::create([
                'periode_data' => $item['periode_data'],
                'jenis_usaha' => $item['jenis_usaha'],
                'kecamatan' => $item['kecamatan'],
                'wilayah' => $item['wilayah'],
            ]);
        }

        $this->info('Data pariwisata imported successfully.');
    }
}
