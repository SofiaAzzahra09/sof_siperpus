<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            'code' => 'BS001',
            'name' => 'Novel'
        ]);

        Book::create([
            'title' => 'Filosofi Gajah Terbang',
            'author' => 'GTA',
            'year' => '2024',
            'publisher' => 'GAT',
            'city' => 'Cianjur',
            'cover' => 'placeholder.com/512px.png',
            'bookshelf_id'=> '1',
        ]);
    }
}
