<?php

use App\Category;
use App\Tour;
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

        {
            factory(User::class, 10 )->create();
            factory(Category::class, 10 )->create();
            factory(Tour::class, 50 )->create();

            DB::table('users')->insert([

                'role' => "admin",
                'name' => 'Lewis Mwangi',
                'email' => 'admin@tbxhost.co.uk',
                'password' => bcrypt('@Lorna9604'),

            ]);

            DB::table('users')->insert([

                'role' => "admin",
                'name' => 'Dennis Nzioka',
                'email' => 'sales@tbxhost.co.uk',
                'password' => bcrypt('@Lorna9604'),

            ]);

            DB::table('users')->insert([

                'role' => "user",
                'name' => 'John Doe',
                'email' => 'info@tbxhost.co.uk',
                'password' => bcrypt('@Lorna9604'),

            ]);
        }

}
