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
        $this->call(FoldersTableSeeder::class);
        // runメソッド内に追加する
        $this->call(TasksTableSeeder::class);
    }
}
