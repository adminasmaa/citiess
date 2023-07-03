<?php

namespace Database\Seeders;
use App\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $models = ['users', 'clients', 'roles',
            'zones', 'installments', 'blocks', 'units','invoices','employees','sections','notes','prices','unitstatus','repairs','services','reports','categories','products'
        ];


        $maps = ['create', 'update', 'read', 'delete'];

        foreach ($models as $model) {
            foreach ($maps as $map) {
                Permission::create([

                    'name' => $map.'_'.$model,
                    'display_name' => $map.'_'.$model,
                    'description' => $map.'_'.$model,
                ]);
            }
        }
    }

}
