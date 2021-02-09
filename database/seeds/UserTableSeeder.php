// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Mees Bakker',
            'email'    => 'mees.bakker@xaris.nl',
            'password' => Hash::make('awesome'),
        ));
    }

}
