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
        $this->command->info('login:admin@admin.com');
        $this->command->info('senha: admin');

        factory(App\User::class, 1)->create();
        $this->call(SenatorsTableSeeder::class);
        $this->command->info('Acesse o endereço abaixo em seu navegador');
        $this->command->call('serve');


    }
}
