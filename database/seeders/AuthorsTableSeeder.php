<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            "Lev Tolstoy",
            "Frank Harbert",
            "J. R. R. Tolkien",
            "Leo Tolstoy",
            "Charlotte Bronte",
            "Aldous Huxley",
            "Mark Twain",
            "Nathaniel Hawthorne",
            "Jane Austen",
            "Robert Louis Stevenson",
            "Mark Twain",
            "F. Scott Fitzgerald",
            "Charles Dickens",
            "Geoffrey Chaucer",
            "Jack London",
            "George Orwell",
            "Anne Frank",
            "Pearl S. Buck",
            "J.R.R. Tolkien",
            "Nathaniel Hawthorne",
            "George Orwell",
            "Mary Shelley",
            "John Steinbeck",
            "Herman Melville",
            "John Steinbeck",
            "Ernest Hemingway",
            "Charles Dickens",
            "John Knowles",
            "Stephen Crane",
            "William Shakespeare",
            "Niccolò Machiavelli",
            "Dante Alighieri",
            "William Shakespeare",
            "Sophocles",
            "William Gibson",
            "Ray Bradbury",
            "Charles Dickens",
            "Edgar Allan Poe",
            "Agatha Christie",
            "Bret Easton Ellis",
            "Bram Stoker",
            "Howard Pyle",
            "Johanna Spyri",
            "Lewis Carroll",
            "Wilkie Collins",
            "Agatha Christie",
            "Herodotus",
            "Xenophon",
            "Homer"
        ];
        foreach ($authors as $author) {
            Author::create([
                'author_name' => $author,
            ]);
        };
    }
}
