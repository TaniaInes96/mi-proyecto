<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
    		'name' => 'Administrador',
            'email' => 'admin@admin.com',
    		'password' => Hash::make('Admin123...'),
    	]);
        User::create([
            'name' => 'Supervisor',
            'email' => 'super@super.com',
            'password' => Hash::make('Super...123'),
        ]);
        User::create([
            'name' => 'Operador',
            'email' => 'oper@oper.com',
            'password' => Hash::make('Operador321'),
        ]);
    }
}
