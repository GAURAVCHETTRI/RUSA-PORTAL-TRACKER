<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
         DB::table('users')->insert([
            'name'=>"Admin",
            'email'=>"rusa@admin.com",
            'password'=>bcrypt('123456789'),
            'two_factor_enable'=>false,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        
    }
}
