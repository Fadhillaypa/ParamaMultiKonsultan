<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Jasa Arsitektural',
            'description' => 'Perencanaan bangunan hunian dan non-hunian dengan pendekatan desain fungsional dan estetis.'
        ]);

        Service::create([
            'title' => 'Desain Rekayasa Struktur',
            'description' => 'Perencanaan struktur bangunan yang aman, efisien, dan sesuai standar teknik.'
        ]);

        Service::create([
            'title' => 'Teknik Sipil Air',
            'description' => 'Perencanaan sistem drainase, irigasi, dan infrastruktur sumber daya air.'
        ]);
    }
}
