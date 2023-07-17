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
        Book::create([
            'book_title' => 'Anna Karenina',
            'book_author' => 'Lev Tolstoy',
            'book_explanation' => "Anna Karenina is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. The story follows the life of Anna Karenina, a married aristocrat who becomes embroiled in a love affair with Count Vronsky, a young and handsome cavalry officer. The novel explores themes of love, marriage, society, morality, and the contrast between city and country life in 19th century Russia.",
            'book_category' => ['Novel', 'Classic'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/AnnaKareninaTitle.jpg/800px-AnnaKareninaTitle.jpg',
            'book_date' => '1878-01-01',
            'book_stock' => 18
        ]);
        Book::create(
            [
                'book_title' => 'Dune',
                'book_author' => 'Frank Herbert',
                'book_explanation' => "Dune is a 1965 epic science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny's This Immortal for the Hugo Award in 1966 and it won the inaugural Nebula Award for Best Novel. It is the first installment of the Dune saga. In 2003, it was described as the world's best-selling science fiction novel. ",
                'book_category' => ['Novel', 'Fantasy', 'Science-Fiction'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/en/d/de/Dune-Frank_Herbert_%281965%29_First_edition.jpg',
                'book_date' => '1965-08-01',
                'book_stock' => 12
            ]
        );
        Book::create(
            [
                'book_title' => 'The Lord of the Rings',
                'book_author' => 'J.R.R. Tolkien',
                'book_explanation' => "The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.",
                'book_category' => ['Novel', 'Fiction', 'Fantasy'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/en/e/e9/First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif',
                'book_date' => '1954-07-29',
                'book_stock' => 18
            ]
        );
        Book::create(
            [
                'book_title' => 'The Death of Ivan Ilyich',
                'book_author' => 'Leo Tolstoy',
                'book_explanation' => "The Death of Ivan Ilyich (also Romanized Ilich, Ilych, Ilyitch; Russian: Смерть Ивана Ильича, romanized: Smert' Ivána Ilyicha), first published in 1886, is a novella by Leo Tolstoy, considered one of the masterpieces of his late fiction, written shortly after his religious conversion of the late 1870s.",
                'book_category' => ['Novel', 'Fiction'],
                'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/The_Death_of_Ivan_Ilyich.jpg',
                'book_date' => '1902-01-01',
                'book_stock' => 7
            ]
        );
        Book::create([
            'book_title' => 'Jane Eyre',
            'book_author' => 'Charlotte Bronte',
            'book_explanation' => "Jane Eyre is a novel by English writer Charlotte Bronte, published in 1847. It follows the story of Jane Eyre, an orphan who becomes a governess at Thornfield Hall and falls in love with her employer, Edward Rochester. The novel explores themes of class, gender, morality, religion, and love in Victorian England.",
            'book_category' => ['Novel', 'Classic'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Jane_Eyre_title_page.jpg',
            'book_date' => '1847-10-16',
            'book_stock' => 15
        ]);
        Book::create([
            'book_title' => 'Brave New World',
            'book_author' => 'Aldous Huxley',
            'book_explanation' => "Brave New World is a dystopian novel by English author Aldous Huxley, published in 1932. The novel is set in a futuristic World State, where citizens are divided into castes and conditioned to conform to society's strict social norms and values. The story follows the protagonist, Bernard Marx, as he struggles to find his place in a society that values conformity above all else. The novel explores themes of individualism, freedom, and the dangers of a society that prioritizes efficiency and pleasure over humanity.",
            'book_category' => ['Novel', 'Dystopian'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/6/62/BraveNewWorld_FirstEdition.jpg',
            'book_date' => '1932-06-18',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'Adventures of Huckleberry Finn',
            'book_author' => 'Mark Twain',
            'book_explanation' => "Adventures of Huckleberry Finn is a novel by Mark Twain, first published in the United States in 1885. The book is noted for its colorful descriptions of people and places along the Mississippi River. It is set in the 1830s and follows the adventures of Huckleberry Finn, a young boy who escapes from his abusive father and runs away with an escaped slave named Jim. The novel explores themes of race, identity, and freedom, and is often considered a masterpiece of American literature.",
            'book_category' => ['Novel', 'Satire'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Huckleberry-finn-with-rabbit.jpg/325px-Huckleberry-finn-with-rabbit.jpg',
            'book_date' => '1885-12-10',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'The Scarlet Letter',
            'book_author' => 'Nathaniel Hawthorne',
            'book_explanation' => "The Scarlet Letter is a novel by Nathaniel Hawthorne, published in 1850. The story is set in 17th-century Puritan Boston and follows the life of Hester Prynne, who is publicly shamed and ostracized for having a child out of wedlock. The novel explores themes of sin, guilt, and redemption, and is considered a masterpiece of American literature.",
            'book_category' => ['Novel', 'Historical Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/8/85/The_Scarlet_Letter_title_page.jpg',
            'book_date' => '1850-03-16',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'Pride and Prejudice',
            'book_author' => 'Jane Austen',
            'book_explanation' => "Pride and Prejudice is a novel by Jane Austen, published in 1813. The story follows the life of Elizabeth Bennet, one of five sisters, as she navigates her way through the social hierarchy of Georgian England. The novel explores themes of love, marriage, class, and gender roles, and is considered one of the greatest works of English literature.",
            'book_category' => ['Novel', 'Romance'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/17/PrideAndPrejudiceTitlePage.jpg',
            'book_date' => '1813-01-28',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'Treasure Island',
            'book_author' => 'Robert Louis Stevenson',
            'book_explanation' => "Treasure Island is an adventure novel by Robert Louis Stevenson, published in 1883. The story follows Jim Hawkins, a young boy who discovers a map leading to a treasure buried by the infamous pirate Captain Flint. Jim sets sail on the Hispaniola with a crew of pirates, including the one-legged Long John Silver, in search of the treasure. The novel is known for its colorful characters and vivid descriptions of life at sea, and has become a classic of children's literature.",
            'book_category' => ['Novel', 'Adventure'],
            'book_img' => 'https://storage.googleapis.com/lr-assets/kids/covers/_hires_imported/9780141321004.jpg',
            'book_date' => '1883-11-14',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'The Adventures of Tom Sawyer',
            'book_author' => 'Mark Twain',
            'book_explanation' => "The Adventures of Tom Sawyer is a novel by Mark Twain published in 1876. It is set in the 1840s in the fictional town of St. Petersburg, inspired by Hannibal, Missouri, where Twain lived as a boy. The story follows young Tom Sawyer and his friend Huckleberry Finn as they embark on a series of adventures, including treasure hunts, pirates, and faking their own deaths. The novel has become a classic of American literature and is one of Twain's most popular works.",
            'book_category' => ['Novel', 'Adventure'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/1d/Tom_Sawyer_1876_frontispiece.jpg',
            'book_date' => '1876-02-17',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'The Great Gatsby',
            'book_author' => 'F. Scott Fitzgerald',
            'book_explanation' => "The Great Gatsby is a novel by F. Scott Fitzgerald published in 1925. Set in the fictional towns of West Egg and East Egg on Long Island in the summer of 1922, the story follows the young and mysterious millionaire Jay Gatsby as he tries to win back his lost love Daisy Buchanan. The novel explores themes of love, wealth, and the corruption of the American Dream. It is widely considered a masterpiece of American literature and a classic of the Jazz Age.",
            'book_category' => ['Novel', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg',
            'book_date' => '1925-04-10',
            'book_stock' => 15
        ]);
        Book::create([
            'book_title' => 'Great Expectations',
            'book_author' => 'Charles Dickens',
            'book_explanation' => "Great Expectations is a novel by Charles Dickens, first published as a serial in 1860-61 and then as a book in 1861. The story follows the life of an orphan named Pip, who lives with his cruel sister and her husband in the marshes of Kent. One day, Pip is visited by an escaped convict and shortly thereafter is asked to visit the reclusive Miss Havisham to play with her adopted daughter, Estella. As Pip grows up, he becomes more and more obsessed with the idea of becoming a gentleman in order to win Estella's love. The novel explores themes of social class, ambition, and personal growth.",
            'book_category' => ['Novel', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Greatexpectations_vol1.jpg',
            'book_date' => '1861-08-01',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'The Canterbury Tales',
            'book_author' => 'Geoffrey Chaucer',
            'book_explanation' => "The Canterbury Tales is a collection of 24 stories written by Geoffrey Chaucer between 1387 and 1400. The stories are told by a group of pilgrims who are traveling to the shrine of Saint Thomas Becket at Canterbury Cathedral. The pilgrims come from various social classes and professions, and each tells a story on the way to and from the shrine. The tales are written in Middle English, which was spoken in England at the time, and they provide a vivid portrait of life in medieval England.",
            'book_category' => ['Fiction', 'Classic'],
            'book_img' => 'https://149645218.v2.pressablecdn.com/wp-content/uploads/2018/02/canterbury-sales.jpg',
            'book_date' => '1400-01-01',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'The Call of the Wild',
            'book_author' => 'Jack London',
            'book_explanation' => "The Call of the Wild is a novel by Jack London, published in 1903. The story is set in the Yukon during the 1890s Klondike Gold Rush, and tells the story of a domesticated dog named Buck who is stolen from his home in California and sold into the brutal life of an Alaskan sled dog. The novel explores themes of survival, freedom, and the primal instincts that drive both humans and animals.",
            'book_category' => ['Adventure', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/2/26/JackLondoncallwild.jpg',
            'book_date' => '1903-01-01',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'Nineteen Eighty-Four',
            'book_author' => 'George Orwell',
            'book_explanation' => "Nineteen Eighty-Four is a dystopian novel by George Orwell, published in 1949. The novel is set in a totalitarian society where individualism is forbidden and conformity is enforced by the government. The protagonist, Winston Smith, works at the Ministry of Truth where he rewrites historical records to conform with the party's propaganda. The novel explores themes of government oppression, the dangers of totalitarianism, and the importance of individual freedom.",
            'book_category' => ['Dystopian', 'Fiction', 'Science-Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/1984first.jpg',
            'book_date' => '1949-06-08',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'The Diary of a Young Girl',
            'book_author' => 'Anne Frank',
            'book_explanation' => "The Diary of a Young Girl is a book by Anne Frank, a Jewish girl who kept a diary while she and her family were in hiding from the Nazis during World War II. Anne's diary chronicles her life in hiding from June 1942 until August 1944, when her family was discovered and sent to concentration camps. The diary was published posthumously in 1947, and has since become one of the most widely read books in the world, and an important historical document.",
            'book_category' => ['Biography', 'Memoir'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/4/47/Het_Achterhuis_%28Diary_of_Anne_Frank%29_-_front_cover%2C_first_edition.jpg',
            'book_date' => '1947-06-25',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'The Good Earth',
            'book_author' => 'Pearl S. Buck',
            'book_explanation' => "The Good Earth is a novel by Pearl S. Buck published in 1931 that dramatizes family life in a Chinese village in the early 20th century. It is the first book in a trilogy that includes Sons and A House Divided. It was the best-selling novel in the United States in both 1931 and 1932, won the Pulitzer Prize for Fiction in 1932, and was influential in Buck's winning the Nobel Prize for Literature in 1938.",
            'book_category' => ['Novel', 'Historical Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/5/5b/GoodEarthNovel.JPG',
            'book_date' => '1931-03-02',
            'book_stock' => 4
        ]);
        Book::create([
            'book_title' => 'The Hobbit',
            'book_author' => 'J.R.R. Tolkien',
            'book_explanation' => "The Hobbit, or There and Back Again is a children's fantasy novel by English author J.R.R. Tolkien. It was published on 21 September 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book remains popular and is recognized as a classic in children's literature.",
            'book_category' => ['Novel', 'Fantasy'],
            'book_img' => 'https://m.media-amazon.com/images/I/71k--OLmZKL._AC_UF1000,1000_QL80_.jpg',
            'book_date' => '1937-09-21',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'The House of the Seven Gables',
            'book_author' => 'Nathaniel Hawthorne',
            'book_explanation' => "The House of the Seven Gables is a Gothic novel written by American author Nathaniel Hawthorne and published in April 1851. The novel follows a New England family and their ancestral home. In the book, Hawthorne explores themes of guilt, retribution, and atonement and colors the tale with suggestions of the supernatural and witchcraft.",
            'book_category' => ['Novel', 'Gothic'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/e/ea/The_House_of_the_Seven_Gables.jpg',
            'book_date' => '1851-04-01',
            'book_stock' => 5
        ]);
        Book::create([
            'book_title' => 'Animal Farm',
            'book_author' => 'George Orwell',
            'book_explanation' => "Animal Farm is an allegorical novella by George Orwell, first published in England on 17 August 1945. The book tells the story of a group of farm animals who rebel against their human farmer, hoping to create a society where the animals can be equal, free, and happy. Ultimately, however, the rebellion is betrayed, and the farm ends up in a state as bad as it was before, under the dictatorship of a pig named Napoleon. The novella is widely regarded as a critique of Stalinism and totalitarianism.",
            'book_category' => ['Novel', 'Satire'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Animal_Farm_-_1st_edition.jpg',
            'book_date' => '1945-08-17',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'Frankenstein',
            'book_author' => 'Mary Shelley',
            'book_explanation' => "Frankenstein; or, The Modern Prometheus is a novel written by English author Mary Shelley. It tells the story of Victor Frankenstein, a young scientist who creates a sapient creature in an unorthodox scientific experiment. Shelley started writing the story when she was 18, and the first edition was published anonymously in London on 1 January 1818, when she was 20. Her name first appeared on the second edition, published in France in 1823.",
            'book_category' => ['Horror', 'Gothic', 'Science-Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/3/35/Frankenstein_1818_edition_title_page.jpg',
            'book_date' => '1818-01-01',
            'book_stock' => 7
        ]);
        Book::create([
            'book_title' => 'Of Mice and Men',
            'book_author' => 'John Steinbeck',
            'book_explanation' => "Of Mice and Men is a novella by John Steinbeck, first published in 1937. It tells the story of George Milton and Lennie Small, two displaced migrant ranch workers, who move from place to place in California in search of new job opportunities during the Great Depression in the United States. Steinbeck based the novella on his own experiences working alongside migrant farm workers as a teenager in the 1910s, and he was influenced by the harsh social and economic conditions of the era. ",
            'book_category' => ['Novella', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Of_Mice_and_Men_%281937_1st_ed_dust_jacket%29.jpg',
            'book_date' => '1937-01-01',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'Moby-Dick',
            'book_author' => 'Herman Melville',
            'book_explanation' => "Moby-Dick; or, The Whale is an 1851 novel by American writer Herman Melville. The book is sailor Ishmael's narrative of the obsessive quest of Ahab, captain of the whaling ship Pequod, for revenge on the giant white sperm whale Moby Dick, which on a previous voyage destroyed Ahab's ship and severed his leg at the knee. Although the novel was a commercial failure and out of print at the time of the author's death in 1891, its reputation as a Great American Novel grew during the 20th century. Moby-Dick has been adapted several times for the stage and screen, and it continues to be regarded as one of the greatest American novels ever written.",
            'book_category' => ['Novel', 'Adventure fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/3/36/Moby-Dick_FE_title_page.jpg',
            'book_date' => '1851-10-18',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'The Grapes of Wrath',
            'book_author' => 'John Steinbeck',
            'book_explanation' => "The Grapes of Wrath is a novel by John Steinbeck, published in 1939. The book tells the story of the Joads, a family of poor farmers who are forced to leave their Oklahoma home and travel to California during the Great Depression. The novel is known for its depiction of the harsh conditions that the Joads and other migrant farm workers faced, as well as for its themes of social justice, family, and the power of the human spirit.",
            'book_category' => ['Novel', 'Historical Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/a/ad/The_Grapes_of_Wrath_%281939_1st_ed_cover%29.jpg',
            'book_date' => '1939-04-14',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'The Old Man and the Sea',
            'book_author' => 'Ernest Hemingway',
            'book_explanation' => "The Old Man and the Sea is a short novel written by Ernest Hemingway in 1951 in Cuba, and published in 1952. It tells the story of Santiago, an aging Cuban fisherman who struggles with a giant marlin far out in the Gulf Stream off the coast of Cuba. The novel explores themes of struggle, perseverance, and the relationship between humans and nature.",
            'book_category' => ['Novel', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/7/73/Oldmansea.jpg',
            'book_date' => '1952-09-01',
            'book_stock' => 12
        ]);
        Book::create([
            'book_title' => 'Oliver Twist',
            'book_author' => 'Charles Dickens',
            'book_explanation' => "Oliver Twist is a novel by Charles Dickens, published in serial form between 1837 and 1839. It tells the story of an orphan named Oliver Twist, who endures a miserable existence in a workhouse and then is placed with an undertaker. He escapes and travels to London, where he meets the Artful Dodger, a member of a gang of juvenile pickpockets led by the criminal Fagin. Oliver is caught up in their criminal activities and struggles to escape their influence.",
            'book_category' => ['Novel', 'Social criticism'],
            'book_img' => 'https://img.kitapyurdu.com/v1/getImage/fn:4638315/wh:true/miw:200/mih:200',
            'book_date' => '1837-1839',
            'book_stock' => 10
        ]);
        Book::create([
            'book_title' => 'A Separate Peace',
            'book_author' => 'John Knowles',
            'book_explanation' => "A Separate Peace is a novel by John Knowles, published in 1959. It is set at the Devon School, a fictional New England prep school, during the summer and winter of 1942. The novel is a coming-of-age story that focuses on the relationship between two roommates, Gene and Finny, who are best friends but also competitive with each other. The novel explores themes of envy, identity, and the nature of friendship, as well as the larger historical context of World War II.",
            'book_category' => ['Coming-of-Age', 'Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/2/25/A_Separate_Peace_cover.jpg',
            'book_date' => '1959-01-01',
            'book_stock' => 5
        ]);
        Book::create([
            'book_title' => 'The Red Badge of Courage',
            'book_author' => 'Stephen Crane',
            'book_explanation' => "The Red Badge of Courage is a war novel by American author Stephen Crane. Taking place during the American Civil War, the story is about a young private of the Union Army, Henry Fleming, who flees from the field of battle. Overcome with shame, he longs for a wound, a 'red badge of courage,' to counteract his cowardice. When his regiment once again faces the enemy, Henry acts as standard-bearer.",
            'book_category' => ['War novel', 'Historical fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/TheRedBadgeOfCourage.jpg',
            'book_date' => '1895-10-05',
            'book_stock' => 7
        ]);
        Book::create([
            'book_title' => 'Twelfth Night',
            'book_author' => 'William Shakespeare',
            'book_explanation' => "Twelfth Night, or What You Will is a comedy by William Shakespeare, believed to have been written around 1601–1602 as a Twelfth Night's entertainment for the close of the Christmas season. The play centers on the twins Viola and Sebastian, who are separated in a shipwreck. Viola (who is disguised as a young man named Cesario) falls in love with Duke Orsino, who in turn is in love with Countess Olivia. Upon meeting Viola, Countess Olivia falls in love with her disguised persona. The play is often seen as a celebration of love and a festive comedy of errors.",
            'book_category' => ['Comedy', 'Romance'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Twelfth_Night_F1.jpg',
            'book_date' => '1602-01-01',
            'book_stock' => 6
        ]);
        Book::create([
            'book_title' => 'Julius Caesar',
            'book_author' => 'William Shakespeare',
            'book_explanation' => "Julius Caesar is a tragedy by William Shakespeare, believed to have been written in 1599. It portrays the conspiracy against the Roman dictator Julius Caesar, his assassination, and its aftermath. It is one of several Roman plays that Shakespeare wrote, based on true events from Roman history, which also include Coriolanus and Antony and Cleopatra.",
            'book_category' => ['Tragedy', 'Historical Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Edwin_Austin_Abbey_-_Within_the_Tent_of_Brutus%2C_Enter_the_Ghost_of_Caesar%2C_Julius_Caesar%2C_Act_IV%2C_Scene_III_-_1937.1148_-_Yale_University_Art_Gallery.jpg',
            'book_date' => '1599',
            'book_stock' => 9
        ]);
        Book::create([
            'book_title' => 'The Prince',
            'book_author' => 'Niccolò Machiavelli',
            'book_explanation' => "The Prince is a 16th-century political treatise written by Italian diplomat and political theorist Niccolò Machiavelli. The work is considered one of the most influential books in history, and it has been interpreted in many ways over the centuries. The book is primarily a guide to gaining and maintaining power, and it is known for its frank and sometimes ruthless advice on how to do so. Machiavelli's ideas about politics and power have had a significant impact on the way people think about leadership and government, and his name has become synonymous with cunning and deception.",
            'book_category' => ['Political philosophy'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/7/77/Machiavelli_Principe_Cover_Page.jpg',
            'book_date' => '1532',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'Inferno',
            'book_author' => 'Dante Alighieri',
            'book_explanation' => "Inferno is the first part of Italian writer Dante Alighieri's 14th-century epic poem Divine Comedy. It is followed by Purgatorio and Paradiso. The Inferno tells the journey of Dante through Hell, guided by the ancient Roman poet Virgil. In the poem, Hell is depicted as nine concentric circles of torment located within the Earth. It is the most famous and widely studied of the three parts, and its vivid descriptions of the punishments meted out to various sinners have helped to shape the popular idea of Hell.",
            'book_category' => ['Epic poetry', 'Allegory'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/f/f0/Inferno.jpg',
            'book_date' => '1320',
            'book_stock' => 5
        ]);
        Book::create([
            'book_title' => 'King Lear',
            'book_author' => 'William Shakespeare',
            'book_explanation' => "King Lear is a tragedy written by William Shakespeare. It depicts the gradual descent into madness of the title character, after he disposes of his kingdom by giving bequests to two of his three daughters, egged on by their continual flattery, bringing tragic consequences for all. Based on the legend of Leir of Britain, a mythological pre-Roman Celtic king, the play has been widely adapted for the stage and motion pictures, with the title role coveted by many of the world's most accomplished actors.",
            'book_category' => ['Tragedy', 'Drama'],
            'book_img' => 'https://img.kitapyurdu.com/v1/getImage/fn:9788677/wh:true/miw:200/mih:200',
            'book_date' => '1606',
            'book_stock' => 3
        ]);
        Book::create([
            'book_title' => 'Othello',
            'book_author' => 'William Shakespeare',
            'book_explanation' => "Othello is a tragedy by William Shakespeare, believed to have been written in 1603. It is based on the story Un Capitano Moro by Cinthio, a disciple of Boccaccio, first published in 1565. The story revolves around its two central characters: Othello, a Moorish general in the Venetian army, and his unfaithful ensign, Iago. The play is set in a city-state, Venice, during the early modern period, and explores themes such as love, jealousy, betrayal, revenge, and racism.",
            'book_category' => ['Tragedy', 'Drama'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Henry_Perronet_Briggs_-_Ira_Aldridge_as_Othello_-_Google_Art_Project.jpg/386px-Henry_Perronet_Briggs_-_Ira_Aldridge_as_Othello_-_Google_Art_Project.jpg',
            'book_date' => '1603',
            'book_stock' => 6
        ]);
        Book::create([
            'book_title' => 'Antigone',
            'book_author' => 'Sophocles',
            'book_explanation' => 'Antigone is a tragedy by Sophocles written in or before 441 BC. It is the third of the three Theban plays chronologically, but was the first written. The play expands on the Theban legend that predated it and picks up where Aeschylus\' Seven Against Thebes ends.',
            'book_category' => ['Tragedy', 'Classical literature'],
            'book_img' => 'https://m.media-amazon.com/images/I/81-BiXpotuL._AC_UF1000,1000_QL80_.jpg',
            'book_date' => '441',
            'book_stock' => 9
        ]);
        Book::create([
            'book_title' => 'Oedipus Rex',
            'book_author' => 'Sophocles',
            'book_explanation' => "Oedipus Rex, also known by its Greek title, Oedipus Tyrannus, or Oedipus the King, is an Athenian tragedy by Sophocles that was first performed around 429 BC. The play tells the story of Oedipus, the king of Thebes, who unwittingly kills his father and marries his mother. When Oedipus discovers the truth about his past, he blinds himself and goes into exile. The play is considered a masterpiece of ancient Greek drama and is one of the most famous plays of all time.",
            'book_category' => ['Tragedy', 'Greek Drama'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/6/69/Oedipus.jpg',
            'book_date' => '429 BC',
            'book_stock' => 4
        ]);
        Book::create([
            'book_title' => 'Neuromancer',
            'book_author' => 'William Gibson',
            'book_explanation' => "Neuromancer is a science fiction novel by American-Canadian writer William Gibson. It is one of the most famous and influential works in the cyberpunk genre, and won the Nebula Award, the Hugo Award, and the Philip K. Dick Award. The novel tells the story of Case, a washed-up computer hacker who is given a second chance by a mysterious employer to pull off the ultimate hack, but the job is more dangerous than he anticipated. Along the way, he encounters a powerful artificial intelligence, a deadly street samurai, and a secretive ex-military officer, all of whom have their own agendas.",
            'book_category' => ['Science-Fiction', 'Cyberpunk'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/4/4b/Neuromancer_%28Book%29.jpg',
            'book_date' => '1984-07-01',
            'book_stock' => 3
        ]);
        Book::create([
            'book_title' => 'Fahrenheit 451',
            'book_author' => 'Ray Bradbury',
            'book_explanation' => "Fahrenheit 451 is a dystopian novel by American writer Ray Bradbury. It was first published in 1953 and presents a future American society where books are outlawed and 'firemen' burn any that are found. The book's title refers to the temperature at which book paper burns. The novel has been the subject of interpretations focusing on the historical role of book burning in suppressing dissenting ideas and works, as well as on Bradbury's own motivations for writing the story.",
            'book_category' => ['Science-Fiction', 'Dystopia'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/d/db/Fahrenheit_451_1st_ed_cover.jpg',
            'book_date' => '1953-10-19',
            'book_stock' => 27
        ]);
        Book::create([
            'book_title' => 'The Mystery of Edwin Drood',
            'book_author' => 'Charles Dickens',
            'book_explanation' => "The Mystery of Edwin Drood is the final novel by Charles Dickens, originally published in 1870. Though the novel is named after the character Edwin Drood, it focuses more on Drood's uncle, John Jasper, a precentor, choirmaster and opium addict, who is in love with his pupil, Rosa Bud. Miss Bud, Edwin Drood's fiancée, has also caught the eye of the high-spirited and hot-tempered Neville Landless. Landless and Edwin Drood take an instant dislike to one another. Later Drood disappears and it is feared that he has been murdered. The novel ends abruptly with the mystery unsolved.",
            'book_category' => ['Mystery', 'Victorian Literature'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Drood_serial_cover.jpg/496px-Drood_serial_cover.jpg',
            'book_date' => '1870-09-01',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'William Wilson',
            'book_author' => 'Edgar Allan Poe',
            'book_explanation' => "William Wilson is a short story by Edgar Allan Poe, first published in 1839. The story follows the life of a man named William Wilson, who describes a supernatural encounter that happened when he was a young boy. Wilson's life is consumed by his obsession with outdoing a boy who bears the same name as him, and whose features are identical to his own. Wilson's doppelgänger appears to him throughout his life, leading him down a path of self-destruction and ultimately leading to his downfall.",
            'book_category' => ['Gothic', 'Horror', 'Short Story'],
            'book_img' => 'https://m.media-amazon.com/images/I/41YutFZ6yFL._AC_UF894,1000_QL80_.jpg',
            'book_date' => '1839-10-01',
            'book_stock' => 5
        ]);
        Book::create([
            'book_title' => 'The Gold-Bug',
            'book_author' => 'Edgar Allan Poe',
            'book_explanation' => "The Gold-Bug is a short story by Edgar Allan Poe, first published in 1843. The story follows an unnamed narrator who seeks the assistance of his friend, William Legrand, in deciphering a secret message. The message leads them on a treasure hunt that takes them to a remote island off the coast of South Carolina. The story is notable for its use of cryptography and includes a detailed description of how to decipher a message using a simple substitution cipher.",
            'book_category' => ['Mystery', 'Short Story'],
            'book_img' => 'https://m.media-amazon.com/images/I/612pWwBb-TL._AC_UF1000,1000_QL80_.jpg',
            'book_date' => '1843-06-21',
            'book_stock' => 4
        ]);
        Book::create([
            'book_title' => 'And Then There Were None',
            'book_author' => 'Agatha Christie',
            'book_explanation' => "And Then There Were None is a mystery novel by Agatha Christie, first published in 1939. The story follows ten strangers who are invited to an isolated island by a mysterious host. They soon realize that they are stranded and that someone is killing them off one by one. As they try to survive, they begin to suspect each other and realize that the killer is among them. The novel has sold over 100 million copies and is considered one of Christie's masterpieces.",
            'book_category' => ['Mystery', 'Crime Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/4/4a/And_Then_There_Were_None_First_Edition_Cover_1939.jpg',
            'book_date' => '1939-11-06',
            'book_stock' => 8
        ]);
        Book::create([
            'book_title' => 'American Psycho',
            'book_author' => 'Bret Easton Ellis',
            'book_explanation' => "American Psycho is a novel by Bret Easton Ellis, published in 1991. The story is told in the first person by Patrick Bateman, a serial killer and Manhattan businessman. Bateman comes from a wealthy family and spends his days working at a finance company, obsessing over designer clothes, eating at trendy restaurants and going to clubs. But at night, he indulges in increasingly sadistic and depraved fantasies, eventually escalating to actual murder. The novel is a commentary on 1980s yuppie culture and the emptiness and amorality of consumerism.",
            'book_category' => ['Satire', 'Horror', 'Thriller'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/b/b5/American_Psycho_by_Bret_Easton_Ellis_first_US_paperback_edition_1991.jpg',
            'book_date' => '1991-03-01',
            'book_stock' => 53
        ]);
        Book::create([
            'book_title' => 'Dracula',
            'book_author' => 'Bram Stoker',
            'book_explanation' => "Dracula is a novel by Bram Stoker, published in 1897. The story is told primarily through a collection of journal entries, letters, and telegrams written by the novel's main characters, including the young lawyer Jonathan Harker, his fiancée Mina Murray, and the vampire hunter Abraham Van Helsing. The novel is set in Transylvania and England, and follows Count Dracula's attempt to move from Transylvania to England to spread the undead curse. Dracula has been assigned various literary genres, including vampire literature, horror fiction, the gothic novel, and invasion literature. The novel has been adapted for film and television numerous times.",
            'book_category' => ['Gothic', 'Horror', 'Paranormal'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Dracula_1st_ed_cover_reproduction.jpg/316px-Dracula_1st_ed_cover_reproduction.jpg',
            'book_date' => '1897-05-26',
            'book_stock' => 12
        ]);
        Book::create([
            'book_title' => 'The Merry Adventures of Robin Hood',
            'book_author' => 'Howard Pyle',
            'book_explanation' => "The Merry Adventures of Robin Hood is a collection of stories about the legendary English outlaw Robin Hood, compiled and retold by Howard Pyle. The book follows Robin Hood and his band of Merry Men as they rob from the rich and give to the poor, all while evading the Sheriff of Nottingham and other enemies. Along the way, Robin Hood falls in love with Maid Marian and engages in various adventures and battles. Originally published in 1883, the book has been adapted into numerous films, television shows, and other media.",
            'book_category' => ['Adventure', 'Folklore'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/e/e6/1883_decorative_title_page.jpg',
            'book_date' => '1883-01-01',
            'book_stock' => 12
        ]);
        Book::create([
            'book_title' => 'Heidi',
            'book_author' => 'Johanna Spyri',
            'book_explanation' => "Heidi is a children's novel by Swiss author Johanna Spyri, first published in 1881. The book tells the story of Heidi, a young orphan girl who is sent to live with her grandfather in the Swiss Alps. At first, her grandfather is reluctant to take her in, but they soon develop a close bond. Heidi becomes close friends with Peter, a young goatherd, and she also befriends Clara, a wealthy but sickly girl who lives nearby. The novel follows Heidi's adventures in the mountains and her relationships with her friends and family. The book has been adapted into numerous films, television series, and stage productions.",
            'book_category' => ["Children's', 'Fiction"],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Spyri_Heidi_Cover_1887.jpg',
            'book_date' => '1881-01-01',
            'book_stock' => 7
        ]);
        Book::create([
            'book_title' => "Alice's Adventures in Wonderland",
            'book_author' => 'Lewis Carroll',
            'book_explanation' => "Alice's Adventures in Wonderland is a novel by Lewis Carroll, published in 1865. It tells the story of a young girl named Alice, who falls through a rabbit hole into a fantastical world populated by peculiar anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children. It is considered to be one of the best examples of the literary nonsense genre. The book has been adapted numerous times into various media, including movies, stage plays, and video games.",
            'book_category' => ['Children’s', 'Fantasy'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Alice%27s_Adventures_in_Wonderland_cover_%281865%29.jpg',
            'book_date' => '1865-11-26',
            'book_stock'=> 6
        ]);
        Book::create([
        'book_title' => 'The Moonstone',
        'book_author' => 'Wilkie Collins',
        'book_explanation' => "The Moonstone is a 19th-century British epistolary novel, generally considered the first detective novel in the English language. The story centres around a large, yellow diamond called the Moonstone, which is stolen from an Indian temple and given to Rachel Verinder on her 18th birthday. That same night, the diamond is stolen again, and suspicion falls on all those in the house. The book is famous for its complex plot and multiple narrators, including Sergeant Cuff, a detective who has become one of the most famous characters in the history of detective fiction.",
        'book_category' => ['Mystery', 'Detective Fiction', 'Victorian Literature'],
        'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/The_Moonstone_1st_ed.jpg/284px-The_Moonstone_1st_ed.jpg',
        'book_date' => '1868-07-01',
        'book_stock'=> 10
    ]);
        Book::create([
            'book_title' => 'The Murder of Roger Ackroyd',
            'book_author' => 'Agatha Christie',
            'book_explanation' => "The Murder of Roger Ackroyd is a detective novel by British author Agatha Christie, first published in the UK by William Collins & Sons in June 1926 and in the US by Dodd, Mead and Company on 19 June of the same year. It is the third novel to feature Hercule Poirot as the lead detective. The story follows Poirot as he investigates the murder of wealthy widower Roger Ackroyd, who is found dead in his study, stabbed with a dagger. As the investigation proceeds, nearly every character in the novel falls under suspicion and many secrets are revealed, leading to a surprising and controversial conclusion.",
            'book_category' => ['Mystery', 'Detective Fiction'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/en/5/57/The_Murder_of_Roger_Ackroyd_First_Edition_Cover_1926.jpg',
            'book_date' => '1926-06-19',
            'book_stock'=> 13
        ]);
        Book::create([
            'book_title' => 'Histories',
            'book_author' => 'Herodotus',
            'book_explanation' => "Histories is a historical account written by the ancient Greek historian Herodotus in the fifth century BCE. It recounts the events leading up to and including the Greco-Persian Wars, which took place between 492 and 449 BCE. Herodotus traveled extensively to conduct his research and included a wide range of subjects in his work, including geography, culture, and ethnography. Histories is considered one of the founding works of Western history and literature.",
            'book_category' => ['History', 'Classical Literature'],
            'book_img' => 'https://cdn.kobo.com/book-images/90d2406c-16bf-4676-9c97-c4f742656133/1200/1200/False/the-histories-36.jpg',
            'book_date' => 'c. 440 BCE',
            'book_stock'=> 12
        ]);
        Book::create([
            'book_title' => 'Anabasis',
            'book_author' => 'Xenophon',
            'book_explanation' => "Anabasis is an autobiographical work by the Greek writer Xenophon. It narrates the story of ten thousand Greek mercenaries who fought in the army of Cyrus the Younger, a Persian prince who attempted to seize the throne from his brother Artaxerxes II. After Cyrus was killed in battle, the Greeks found themselves stranded in the heart of the Persian Empire, thousands of miles from home. They were forced to make their way back to Greece by marching through hostile territory, fighting their way through enemy forces, and overcoming numerous other obstacles. The story of their epic journey has been called one of the greatest adventure tales of all time.",
            'book_category' => ['History', 'Adventure'],
            'book_img' => 'https://upload.wikimedia.org/wikipedia/commons/1/13/Xenophon_Anabasis.jpg',
            'book_date' => '4th Century BC',
            'book_stock'=> 9
        ]);
        Book::create([
            'book_title' => 'Iliad',
            'book_author' => 'Homer',
            'book_explanation' => "The Iliad is an epic poem written by Homer, most likely in the 8th century BCE. It tells the story of the Trojan War, specifically the wrath of the Greek hero Achilles and its consequences. The poem is divided into 24 books and contains around 15,000 lines of dactylic hexameter. It is considered one of the most important works of ancient Greek literature and has had a significant impact on Western culture.",
            'book_category' => ['Poetry', 'History'],
            'book_img' => 'https://cdn.kobo.com/book-images/484791ab-f4a8-43f8-b9fa-a6dc4575840b/1200/1200/False/the-iliad-96.jpg',
            'book_date' => '-800',
            'book_stock'=> 61
        ]);
        Book::create([
        'book_title' => 'Odysseia',
        'book_author' => 'Homer',
        'book_explanation' => "Odysseia (The Odyssey) is an epic poem by the ancient Greek poet Homer, believed to have been composed near the end of the 8th century BC. It tells the story of Odysseus, the king of Ithaca, and his ten-year journey home after the Trojan War. Along the way, he faces numerous challenges and obstacles, including a battle with the Cyclops, a visit to the land of the dead, and a confrontation with the sea god Poseidon. The Odyssey is a foundational work of Western literature and has had a lasting influence on storytelling.",
        'book_category' => ['Poetry', 'Adventure'],
        'book_img' => 'https://1k-cdn.com/resimler/kitaplar/91428_828f1_1606467680.jpg',
        'book_date' => '8th century BC',
        'book_stock'=> 38
    ]);
    }
}
