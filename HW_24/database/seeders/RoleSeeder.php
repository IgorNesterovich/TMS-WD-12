<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->count(15)->sequence(function (Sequence $sequence){
                if($sequence->index >= 5)
                {
                    $role = rand(0, 1);

                    if($role){
                        return ['role' => 'editor'];
                    } else {
                        return ['role' => 'viewer'];
                    }
                }
                else return ['role' => 'admin'];
            })->create();
    }
}