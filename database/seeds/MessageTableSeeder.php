<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();
        DB::table('messages')->insert([
            'content' => 'テスト1',
        ]);

        DB::table('messages')->insert([
            'content' => 'テスト2',
        ]);

        DB::table('messages')->insert([
            'content' => 'テスト3',
        ]);
    }
}
