<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {

         DB::table('books')->insert([

             [
                 'title' => 'Harry Potter and the Sorcerer\'s Stone',
                 'author_id' => 1,
                 'price' => 10
             ],

             [
                 'title' => 'Harry Potter and the Chamber of Secrets',
                 'author_id' => 1,
                 'price' => 12
             ],

             [
                 'title' => 'Harry Potter and the Prisoner of Azkaban',
                 'author_id' => 1,
                 'price' => 14
             ],

             [
                 'title' => 'A Game of Thrones',
                 'author_id' => 2,
                 'price' => 15
             ],

             [
                 'title' => 'A Clash of Kings',
                 'author_id' => 2,
                 'price' => 16
             ],

             [
                 'title' => 'A Storm of Swords',
                 'author_id' => 2,
                 'price' => 18
             ],

             [
                 'title' => 'The Shining',
                 'author_id' => 3,
                 'price' => 12
             ],

             [
                 'title' => 'It',
                 'author_id' => 3,
                 'price' => 14
             ],

             [
                 'title' => 'The Girl with the Dragon Tattoo',
                 'author_id' => 4,
                 'price' => 16
             ]

         ]);

     }

}
