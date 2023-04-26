<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(
            [
                'book_title' => 'A Game of Thrones',
                'book_author' => 'George R. R. Martin',
                'book_explanation' => "Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.As Warden of the north, Lord Eddard Stark counts it a curse when King Robert bestows on him the office of the Hand. His honour weighs him down at court where a true man does what he will, not what he must … and a dead enemy is a thing of beauty.The old gods have no power in the south, Stark’s family is split and there is treachery at court. Worse, the vengeance-mad heir of the deposed Dragon King has grown to maturity in exile in the Free Cities. He claims the Iron Throne.",
                'book_category' =>['Novel','Grim Dark'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/en/9/93/AGameOfThrones.jpg',
                'book_date' => '01-08-1996',
                'book_stock'=>24
            ]
        );
        Book::create(
            [
                'book_title' => 'Dune',
                'book_author' => 'Frank Harbert',
                'book_explanation' => "Dune is a 1965 epic science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny's This Immortal for the Hugo Award in 1966 and it won the inaugural Nebula Award for Best Novel. It is the first installment of the Dune saga. In 2003, it was described as the world's best-selling science fiction novel. ",
                'book_category' =>['Novel','Grim Dark','Science-Fiction'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/en/d/de/Dune-Frank_Herbert_%281965%29_First_edition.jpg',
                'book_date' => '01-08-1965',
                'book_stock'=>12
            ]
        );
        Book::create(
            [
                'book_title' => 'The Lord of the Rings',
                'book_author' => 'J. R. R. Tolkien',
                'book_explanation' => "The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.",
                'book_category' =>['Novel','Fiction','Fantasy'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/en/e/e9/First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif',
                'book_date' => '29-07-1954',
                'book_stock'=>18
            ]
        );
        Book::create(
            [
                'book_title' => 'The Death of Ivan Ilyich',
                'book_author' => 'Leo Tolstoy',
                'book_explanation' => "The Death of Ivan Ilyich (also Romanized Ilich, Ilych, Ilyitch; Russian: Смерть Ивана Ильича, romanized: Smert' Ivána Ilyicha), first published in 1886, is a novella by Leo Tolstoy, considered one of the masterpieces of his late fiction, written shortly after his religious conversion of the late 1870s.",
                'book_category' =>['Novel','Fiction'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/The_Death_of_Ivan_Ilyich.jpg',
                'book_date' => '01-01-1902',
                'book_stock'=>7
            ]
        );
    }
}
