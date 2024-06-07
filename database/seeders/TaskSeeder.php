<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => 'Tugas MTK',
            'deadline' => '2024-08-05',
            'status' => 'Belum di kerjakan',
            'description' => 'Kerjakan tugas MTK halaman 21',
        ]);

        Task::factory(5)->create();
    }
}
