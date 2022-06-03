<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'book_no' => '1',
                'isbn' => '1',
                'subject' => 'Computer Science',
                'category' => 'Computer ',
                'book_name' => 'Computer Science Programming',
                'author' => 'Grey',
                'publisher' => 'Thomas',
                'edition' => '2019',
                'copies' => '100',
            ],

            [
                'book_no' => '2',
                'isbn' => '2',
                'subject' => 'Computer programming',
                'category' => 'Computer',
                'book_name' => 'Turbo C',
                'author' => 'Biden',
                'publisher' => 'Alex',
                'edition' => '2005',
                'copies' => '9',
            ],

        ]);
    }
}
