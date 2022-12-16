<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('roles')->insert([
            'name'=>'SuperAdmin'
        ]);
        DB::table('mpayes')->insert([
            'name'=>'Orange'
        ]);
        DB::table('typepayements')->insert([
            'name'=>'programmé'
        ]);
        DB::table('typepayements')->insert([
            'name'=>'immediat'
        ]);
        DB::table('mpayes')->insert([
            'name'=>'Flooz'
        ]);
        DB::table('roles')->insert([
            'name'=>'User'
        ]);
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
    }
}
