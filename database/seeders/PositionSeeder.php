<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'Penanggung Jawab Teknis',
            'Gudang',
            'Teknisi',
            'Staff Gudang',
            'Relation Affair',
            'HR',
            'General Affair',
            'Keuangan',
            'Sales Marketing',
            'Marketing Support / Purchasing',
        ];

        foreach ($positions as $position) {
            Position::create(['name' => $position]);
        }
    }
}
