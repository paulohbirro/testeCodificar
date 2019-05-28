<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->command->call('migrate:fresh');

        $this->command->line("Database criado.");

        $this->command->info('Criando usuario no banco');

        factory(App\User::class, 1)->create();
        $this->call(SenatorsTableSeeder::class);


    }
}
