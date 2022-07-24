<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Book::create([

            'title' => 'The Lord of the Rings',
            'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold.',
            'author_name' => 'John Doe',
            'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
      ]);

        Book::create([

                'title' => 'The Hobbit',
                'description' => 'The Hobbit, or There and Back Again is a children\'s fantasy novel written by English author J. R. R. Tolkien. It is the first of three volumes in The Hobbit, and the sequel to The Lord of the Rings. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Hobbit is one of the best-selling novels ever written, with over 150 million copies sold.',
                'author_name' => 'John Doe',
                'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
        ]);

        Book::create([

                'title' => 'The Lord of the Rings',
                'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold.',
                'author_name' => 'John Doe',
                'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
        ]);

        Book::create([

                'title' => 'The Hobbit',
                'description' => 'The Hobbit, or There and Back Again is a children\'s fantasy novel written by English author J. R. R. Tolkien. It is the first of three volumes in The Hobbit, and the sequel to The Lord of the Rings. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Hobbit is one of the best-selling novels ever written, with over 150 million copies sold.',
                'author_name' => 'John Doe',
                'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
        ]);

        Book::create([

                'title' => 'The Lord of the Rings',
                'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold.',
                'author_name' => 'John Doe',
                'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
        ]);

        Book::create([

            'title' => 'The Hobbit',
            'description' => 'The Hobbit, or There and Back Again is a children\'s fantasy novel written by English author J. R. R. Tolkien. It is the first of three volumes in The Hobbit, and the sequel to The Lord of the Rings. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Hobbit is one of the best-selling novels ever written, with over 150 million copies sold.',
            'author_name' => 'John Doe',
            'image' => 'https://cdn.shopify.com/s/files/1/0385/8490/9956/products/317599_1024x_e5843a0d-c058-48c9-a805-493daf545d19_800x.jpg?v=1634717129',
        ]);


    }
}
