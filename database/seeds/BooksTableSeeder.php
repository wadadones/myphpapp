<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("books")->truncate();
        //
        $books = [
            [
                "name" => "PHP book",
                "price" => 2000,
                "author" => "PHPER"
            ],
            [
                "name" => "Laravel book",
                "price" => 3000,
                "author" => null
            ],
            [
                "name" => "PHP book",
                "price" => 2500,
                "author" => "Rubyist"
            ]
        ];

        // runでちゃんと登録しないといけないのね
        foreach($books as $book) {
            \App\Book::create($book);
        }
    }
}
