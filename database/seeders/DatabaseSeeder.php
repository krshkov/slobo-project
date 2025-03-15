<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Task;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Random\RandomException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @throws RandomException
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Stole Krshkov',
            'email' => 'krshkovstole@gmail.com',
            'phone' => '+38977627320',
            'password' => bcrypt('sekakov'),
            'role' => 'client',
        ]);

        User::factory(10)->create();
        Category::factory(10)->has(SubCategory::factory()->count(random_int(1, 4)))->create();
        Task::factory(20)->create();
        $this->seed_bookings();
    }

    private function seed_bookings(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $task = Task::query()->where('status', 'pending')->inRandomOrder()->first();
            $handyman = User::query()->where('role', 'handyman')->inRandomOrder()->first();

            if (!$task || !$handyman) {
                continue;
            }

            try {
                DB::beginTransaction();
                Booking::query()->create([
                    'task_id' => $task->id,
                    'handyman_id' => $handyman->id,
                    'booking_time' => now()->addDays(random_int(1, 7)),
                ]);

                $task->update(['status' => 'assigned']);
                DB::commit();
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                DB::rollBack();
                continue;
            }
        }
    }
}
