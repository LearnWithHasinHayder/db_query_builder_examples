<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AuthorsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {

        DB::table('authors')->insert([
            [
                'name' => 'J.K. Rowling',
                'bio' => 'British author and creator of the Harry Potter book series.'
            ],
            [
                'name' => 'George R. R. Martin',
                'bio' => 'American novelist and short story writer.'
            ],
            [
                'name' => 'Stephen King',
                'bio' => 'American author of horror, supernatural fiction, suspense, and fantasy books.'
            ],
            [
                'name' => 'John Grisham',
                'bio' => 'American attorney and writer known for his legal thrillers.'
            ],
            [
                'name' => 'Suzanne Collins',
                'bio' => 'American novelist and screenwriter known for The Hunger Games series.'
            ]
        ]);

    }
}
