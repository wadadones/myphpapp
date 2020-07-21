<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * $ php artisan db:seed でこれが実行される
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
    }
}
