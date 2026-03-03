<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VulnerableCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vulnerableCategories = [
            [
                'name' => 'Bayi (0-2 tahun)',
                'criteria' => 'Kebutuhan MPASI & imunisasi',
                'is_active' => 1,
            ],
            [
                'name' => 'Balita (2-5 tahun)',
                'criteria' => 'Kebutuhan Gizi & Ruangan Bermain',
                'is_active' => 1,
            ],
            [
                'name' => 'Anak (6-12 tahun)',
                'criteria' => 'Kebutuhan Pendidikan Darurat',
                'is_active' => 1,
            ],
            [
                'name' => 'Ibu Hamil/Menyusui',
                'criteria' => 'Kebutuhan Lakatsi & Nutrisi Tambahan',
                'is_active' => 1,
            ],
            [
                'name' => 'Lansia Pria (Resiko Tinggi)',
                'criteria' => 'Monitoring Kesehatan Rutin',
                'is_active' => 1,
            ],
            [
                'name' => 'Lansia Wanita (Resiko Tinggi)',
                'criteria' => 'Monitoring Kesehatan Rutin',
                'is_active' => 1,
            ],
             [
                'name' => 'Difabel Fisik (Perempuan)',
                'criteria' => 'Aksesibilitas MCK Khusus',
                'is_active' => 1,
            ],
             [
                'name' => 'Difabel Fisik (Pria)',
                'criteria' => 'Aksesibilitas MCK Khusus',
                'is_active' => 1,
            ],
                [
                    'name' => 'Difabel Mental (Perempuan)',
                    'criteria' => 'Dukungan Psikososial Khusu',
                    'is_active' => 1,
                ],
                [
                    'name' => 'Difabel Mental (Pria)',
                    'criteria' => 'Dukungan Psikososial Khusu', 
                    'is_active' => 1,
                ],
                [
                    'name' => 'Non-Rentean (Perempuan)',
                    'criteria' => 'Tenaga Bantuan/Dapur Umum',
                    'is_active' => 1,
                ],
                [
                    'name' => 'Non-Rentean (Pria)',
                    'criteria' => 'Tenaga Bantuan/Keamanan',
                    'is_active' => 1,
                ],
    ];
        foreach ($vulnerableCategories as $category) {
            \App\Models\VulnerableCategory::create($category);
        }
    }
}
