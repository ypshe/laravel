<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$6jFnX8wldOyEB.LWdkQYNuCc15UGlSPhYCAqkdwRs0NB7Y1pqFWKa',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-11-02 07:51:04',
                'updated_at' => '2017-11-02 07:51:04',
            ),
        ));
        
        
    }
}