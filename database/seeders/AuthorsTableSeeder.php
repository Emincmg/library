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
        Author::create(
            [
                'author_name' => 'Lev Tolstoy',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/L.N.Tolstoy_Prokudin-Gorsky.jpg/347px-L.N.Tolstoy_Prokudin-Gorsky.jpg',
                'author_explanation' => "Born to an aristocratic Russian family in 1828, Tolstoy's notable works include the novels War and Peace (1869) and Anna Karenina (1878), often cited as pinnacles of realist fiction. He first achieved literary acclaim in his twenties with his semi-autobiographical trilogy, Childhood, Boyhood, and Youth (1852–1856), and Sevastopol Sketches (1855), based upon his experiences in the Crimean War. His fiction includes dozens of short stories such as 'After the Ball' (1911), and several novellas such as The Death of Ivan Ilyich (1886), Family Happiness (1859) and Hadji Murad (1912). He also wrote plays and philosophical essays. ",
                'author_books' => json_encode(['Anna Karenina', 'The Death of Ivan Ilyich']),
                'author_born' => '1828-09-09',
                'author_demise' => '1910-11-20'
            ]);
        Author::create([
                'author_name' => 'Frank Herbert',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/6/65/Frank_Herbert_headshot.jpg',
                'author_explanation' => "Frank Herbert (1920-1986) was an American science fiction writer best known for his novel Dune and its five sequels. He was born in Tacoma, Washington, and worked as a journalist and photographer before becoming a full-time writer. Dune, published in 1965, is considered one of the greatest science fiction novels of all time and has been adapted into films, TV series, and video games. Herbert's works often explore themes of ecology, religion, politics, and human evolution.",
                'author_books' => json_encode(['Dune']),
                'author_born' => '1920-10-08',
                'author_demise' => '1986-02-11',
            ]);
        Author::create([
                'author_name' => 'Charlotte Bronte',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/CBRichmond.png',
                'author_explanation' => "Charlotte Brontë (1816-1855) was an English novelist and poet. She is best known for her novel Jane Eyre, published in 1847, which is considered a classic of English literature. Charlotte Brontë and her sisters Emily and Anne, also known as the Brontë sisters, were influential writers of the 19th century. Charlotte Brontë's works often explore themes of feminism, social class, and the role of women in society. Her other notable works include Shirley and Villette.",
                'author_books' => json_encode(['Jane Eyre']),
                'author_born' => '1816-04-21',
                'author_demise' => '1855-03-31',
            ]);
        Author::create([
                'author_name' => 'Aldous Huxley',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Aldous_Huxley_psychical_researcher.png/180px-Aldous_Huxley_psychical_researcher.png',
                'author_explanation' => "Aldous Huxley (1894-1963) was an English writer and philosopher. He is best known for his dystopian novel Brave New World, published in 1932. Huxley's works often explore themes of technology, social control, and the impact of science on society. He also wrote on topics such as spirituality, mysticism, and the human condition. In addition to novels, Huxley wrote essays, poetry, and screenplays. His other notable works include Point Counter Point, Island, and The Doors of Perception.",
                'author_books' => json_encode(['Brave New World']),
                'author_born' => '1894-07-26',
                'author_demise' => '1963-11-22',
            ]);
        Author::create([
                'author_name' => 'Mark Twain',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Mark_Twain_by_AF_Bradley.jpg/342px-Mark_Twain_by_AF_Bradley.jpg',
                'author_explanation' => "Mark Twain (1835-1910) was an American writer, humorist, and lecturer. He is best known for his novels The Adventures of Tom Sawyer and Adventures of Huckleberry Finn, both of which are considered classics of American literature. Twain's works often satirize and comment on social issues, including racism and the hypocrisy of society. He was known for his wit, storytelling skills, and his ability to capture the American vernacular. In addition to his novels, Twain wrote essays, short stories, and travelogues.",
                'author_books' => json_encode(['Adventures of Huckleberry Finn','The Adventures of Tom Sawyer']),
                'author_born' => '1835-11-30',
                'author_demise' => '1910-04-21',
            ]);
        Author::create([
                'author_name' => 'Nathaniel Hawthorne',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Nathaniel_Hawthorne_by_Brady%2C_1860-64.jpg/171px-Nathaniel_Hawthorne_by_Brady%2C_1860-64.jpg',
                'author_explanation' => "Nathaniel Hawthorne (1804-1864) was an American novelist and short story writer. He is best known for his novel The Scarlet Letter, published in 1850. Hawthorne's works often explore themes of sin, guilt, and the complexities of human nature. His writing style is characterized by allegory, symbolism, and psychological depth. In addition to The Scarlet Letter, Hawthorne's notable works include The House of the Seven Gables, The Blithedale Romance, and Twice-Told Tales.",
                'author_books' => json_encode(['The Scarlet Letter','The House of the Seven Gables']),
                'author_born' => '1804-07-04',
                'author_demise' => '1864-05-19',
            ]);
        Author::create([
                'author_name' => 'Jane Austen',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/CassandraAusten-JaneAusten%28c.1810%29_hires.jpg/186px-CassandraAusten-JaneAusten%28c.1810%29_hires.jpg',
                'author_explanation' => "Jane Austen (1775-1817) was an English novelist known for her works of romantic fiction. Her novels, including Pride and Prejudice, Sense and Sensibility, and Emma, are widely regarded as classics of English literature. Austen's writing style is characterized by wit, social commentary, and a keen observation of the manners and customs of the British landed gentry. Her works continue to be celebrated for their timeless themes and engaging characters.",
                'author_books' => json_encode(['Pride and Prejudice']),
                'author_born' => '1775-12-16',
                'author_demise' => '1817-07-18',
            ]);
        Author::create([
                'author_name' => 'Robert Louis Stevenson',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Robert_Louis_Stevenson_by_Henry_Walter_Barnett_bw.jpg/180px-Robert_Louis_Stevenson_by_Henry_Walter_Barnett_bw.jpg',
                'author_explanation' => "Robert Louis Stevenson (1850-1894) was a Scottish novelist, poet, and travel writer. He is best known for his adventure novel Treasure Island and the psychological thriller Strange Case of Dr Jekyll and Mr Hyde. Stevenson's works often explore themes of duality, adventure, and the human condition. His vivid storytelling and ability to create memorable characters have made him one of the most popular and enduring authors of his time.",
                'author_books' => json_encode(['Treasure Island']),
                'author_born' => '1850-11-13',
                'author_demise' => '1894-12-03',
            ]);
        Author::create([
                'author_name' => 'F. Scott Fitzgerald',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/F._Scott_Fitzgerald_%281929_photo_portrait_by_Nickolas_Muray%29_Cropped.jpg/194px-F._Scott_Fitzgerald_%281929_photo_portrait_by_Nickolas_Muray%29_Cropped.jpg',
                'author_explanation' => "F. Scott Fitzgerald (1896-1940) was an American writer known for his novels and short stories that captured the spirit of the Jazz Age. His most famous work is The Great Gatsby, published in 1925, which is considered a masterpiece of American literature. Fitzgerald's writing often explores themes of wealth, love, ambition, and the decline of the American Dream. His lyrical prose and ability to portray the complexities of human emotions have made him one of the greatest writers of the 20th century.",
                'author_books' => json_encode(['The Great Gatsby']),
                'author_born' => '1896-09-24',
                'author_demise' => '1940-12-21',
            ]);
        Author::create([
                'author_name' => 'Charles Dickens',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Dickens_Gurney_head.jpg/164px-Dickens_Gurney_head.jpg',
                'author_explanation' => "Charles Dickens (1812-1870) was an English writer and social critic. He is regarded as one of the greatest novelists of the Victorian era. Dickens' works, such as Oliver Twist, A Tale of Two Cities, and Great Expectations, often depict the social issues of his time, including poverty, injustice, and the harsh conditions of the working class. His vivid characters and compelling storytelling have made him a literary icon whose works continue to be widely read and admired.",
                'author_books' => json_encode(['Great Expectations','Oliver Twist','The Mystery of Edwin Drood']),
                'author_born' => '1812-02-07',
                'author_demise' => '1870-06-09',
            ]);
        Author::create([
                'author_name' => 'Geoffrey Chaucer',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Portrait_of_Geoffrey_Chaucer_%284671380%29_%28cropped%29_02.jpg/191px-Portrait_of_Geoffrey_Chaucer_%284671380%29_%28cropped%29_02.jpg',
                'author_explanation' => "Geoffrey Chaucer (c. 1343-1400) was an English poet and author. He is often referred to as the 'Father of English literature' and is best known for his work The Canterbury Tales. Chaucer's writing style and use of Middle English had a significant influence on the development of the English language. His works reflect the social, cultural, and religious aspects of medieval England.",
                'author_books' => json_encode(['The Canterbury Tales']),
                'author_born' => '1343',
                'author_demise' => '1400-10-25',
            ]);
        Author::create([
                'author_name' => 'Jack London',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Jack_London_young.jpg/182px-Jack_London_young.jpg',
                'author_explanation' => "Jack London (1876-1916) was an American writer and social activist. He is best known for his adventure novels and short stories, including The Call of the Wild and White Fang. London's works often depict the struggle for survival in the wilderness and explore themes of nature, human-animal relationships, and social inequality. His vivid storytelling and vivid descriptions have made him one of the most popular American authors of his time.",
                'author_books' => json_encode(['The Call of the Wild']),
                'author_born' => '1876-01-12',
                'author_demise' => '1916-11-22',
            ]);
        Author::create([
                'author_name' => 'George Orwell',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/George_Orwell_press_photo.jpg/177px-George_Orwell_press_photo.jpg',
                'author_explanation' => "George Orwell (1903-1950) was an English writer and journalist. He is best known for his dystopian novels Nineteen Eighty-Four and Animal Farm, which offer powerful critiques of totalitarianism and political oppression. Orwell's works often explore themes of social injustice, surveillance, and the abuse of power. His clear and concise writing style, combined with his thought-provoking ideas, have made him one of the most influential writers of the 20th century.",
                'author_books' => json_encode(['Animal Farm','Nineteen Eighty-Four']),
                'author_born' => '1903-06-25',
                'author_demise' => '1950-01-21',
            ]);
        Author::create([
                'author_name' => 'Anne Frank',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Anne_Frank_passport_photo%2C_May_1942.jpg/243px-Anne_Frank_passport_photo%2C_May_1942.jpg',
                'author_explanation' => "Anne Frank (1929-1945) was a German-born Jewish diarist and writer. Her diary, The Diary of a Young Girl, has become one of the most widely read books in the world and provides a poignant account of her experiences hiding from the Nazis during World War II. Anne Frank's diary captures her innermost thoughts, dreams, and fears, and serves as a powerful testament to the human spirit and resilience in the face of adversity.",
                'author_books' => json_encode(['The Diary of a Young Girl']),
                'author_born' => '1929-06-12',
                'author_demise' => '1945-03-??',
            ]);
        Author::create([
                'author_name' => 'Pearl S. Buck',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Pearl_Buck_1972.jpg/180px-Pearl_Buck_1972.jpg',
                'author_explanation' => "Pearl S. Buck (1892-1973) was an American writer and novelist. She is best known for her novel The Good Earth, which won the Pulitzer Prize in 1932. Buck's works often explore themes of Chinese society, culture, and the experiences of women. Her writing style is characterized by its rich detail, vivid imagery, and empathetic portrayals of her characters. Buck's works have had a significant impact on Western understanding and appreciation of Chinese culture.",
                'author_books' => json_encode(['The Good Earth']),
                'author_born' => '1892-06-26',
                'author_demise' => '1973-03-06',
            ]);
        Author::create([
                'author_name' => 'J.R.R. Tolkien',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/J._R._R._Tolkien%2C_ca._1925.jpg/180px-J._R._R._Tolkien%2C_ca._1925.jpg',
                'author_explanation' => "J.R.R. Tolkien (1892-1973) was an English writer, poet, and university professor. He is best known for his high fantasy novels, The Hobbit and The Lord of the Rings trilogy. Tolkien's works are set in fictional worlds and are known for their rich mythology, detailed world-building, and captivating storytelling. His works have had a profound influence on the fantasy genre and have garnered a dedicated following of readers worldwide.",
                'author_books' => json_encode(['The Hobbit']),
                'author_born' => '1892-01-03',
                'author_demise' => '1973-09-02',
            ]);
        Author::create([
                'author_name' => 'Mary Shelley',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mary_Wollstonecraft_Shelley_Rothwell.tif/lossy-page1-197px-Mary_Wollstonecraft_Shelley_Rothwell.tif.jpg',
                'author_explanation' => "Mary Shelley (1797-1851) was an English writer known for her novel Frankenstein; or, The Modern Prometheus. Shelley's work is considered a pioneering work of science fiction and Gothic literature. Her novel explores themes of creation, ambition, and the consequences of playing God. Shelley's writing continues to captivate readers and has had a lasting impact on the literary world.",
                'author_books' => json_encode(['Frankenstein']),
                'author_born' => '1797-08-30',
                'author_demise' => '1851-02-01',
            ]);
        Author::create([
                'author_name' => 'Herman Melville',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Herman_Melville_by_Joseph_O_Eaton.jpg/195px-Herman_Melville_by_Joseph_O_Eaton.jpg',
                'author_explanation' => "Herman Melville (1819-1891) was an American novelist, poet, and short story writer. He is best known for his novel Moby-Dick, a literary masterpiece that explores themes of obsession, fate, and the human condition. Melville's works often delve into philosophical and psychological depths, showcasing his mastery of prose and storytelling. Despite initial mixed reviews, his works are now considered some of the greatest in American literature.",
                'author_books' => json_encode(['Moby-Dick']),
                'author_born' => '1819-08-01',
                'author_demise' => '1891-09-28',
            ]);
        Author::create([
                'author_name' => 'John Steinbeck',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/John_Steinbeck_1939_%28cropped%29.jpg/200px-John_Steinbeck_1939_%28cropped%29.jpg',
                'author_explanation' => "John Steinbeck (1902-1968) was an American writer and Nobel laureate. He is best known for his novels The Grapes of Wrath, Of Mice and Men, and East of Eden. Steinbeck's works often explore themes of social justice, poverty, and the human condition. His realistic portrayals of characters and evocative descriptions of the American landscape have made him one of the most celebrated and influential American authors of the 20th century.",
                'author_books' => json_encode(['Of Mice and Men','The Grapes of Wrath']),
                'author_born' => '1902-02-27',
                'author_demise' => '1968-12-20',
            ]);
        Author::create([
                'author_name' => 'Ernest Hemingway',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/ErnestHemingway.jpg/192px-ErnestHemingway.jpg',
                'author_explanation' => "Ernest Hemingway (1899-1961) was an American writer and journalist. He is known for his distinctive writing style characterized by simplicity and understated emotion. Hemingway's works often explore themes of masculinity, war, and the human experience. His notable novels include The Old Man and the Sea, A Farewell to Arms, and For Whom the Bell Tolls. Hemingway's contributions to literature have earned him numerous awards and a lasting legacy.",
                'author_books' => json_encode(['The Old Man and the Sea']),
                'author_born' => '1899-07-21',
                'author_demise' => '1961-07-02',
            ]);
        Author::create([
                'author_name' => 'John Knowles',
                'author_img' => 'https://images.gr-assets.com/authors/1201185977p8/3496.jpg',
                'author_explanation' => "John Knowles (1926-2001) was an American writer best known for his novel A Separate Peace. The novel explores themes of friendship, guilt, and the loss of innocence. Knowles' writing style is characterized by its introspection and psychological depth. A Separate Peace continues to be studied in schools and has resonated with readers for its exploration of the complexities of human relationships.",
                'author_books' => json_encode(['A Separate Peace']),
                'author_born' => '1926-09-16',
                'author_demise' => '2001-11-29',
            ]);
        Author::create([
                'author_name' => 'Stephen Crane',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/SCrane2.JPG',
                'author_explanation' => "Stephen Crane (1871-1900) was an American writer and poet. He is best known for his novel The Red Badge of Courage, a classic work of American literature that depicts the experiences of a young soldier during the American Civil War. Crane's works often explore themes of war, courage, and the psychological effects of battle. His vivid imagery and realistic portrayal of war have earned him a place among the most important American writers of his time.",
                'author_books' => json_encode(['The Red Badge of Courage']),
                'author_born' => '1871-11-01',
                'author_demise' => '1900-06-05',
            ]);
        Author::create([
                'author_name' => 'William Shakespeare',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Shakespeare.jpg/187px-Shakespeare.jpg',
                'author_explanation' => "William Shakespeare (1564-1616) was an English playwright, poet, and actor. He is widely regarded as the greatest writer in the English language and the world's preeminent dramatist. Shakespeare's works include plays, sonnets, and poems that explore a wide range of themes, emotions, and human experiences. His works, such as Romeo and Juliet, Hamlet, Macbeth, and Othello, continue to be performed and studied worldwide, making him an enduring figure in literature and theatre.",
                'author_books' => json_encode(['Julius Caesar','King Lear','Othello','Twelfth Night']),
                'author_born' => '1564-04-26',
                'author_demise' => '1616-04-23',
            ]);
        Author::create([
                'author_name' => 'Niccolò Machiavelli',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Portrait_of_Niccol%C3%B2_Machiavelli.jpg/187px-Portrait_of_Niccol%C3%B2_Machiavelli.jpg',
                'author_explanation' => "Niccolò Machiavelli (1469-1527) was an Italian Renaissance political philosopher, historian, and writer. He is best known for his book The Prince, a treatise on political power and leadership. Machiavelli's ideas on governance, diplomacy, and the acquisition and maintenance of power have had a significant impact on political thought. Although controversial, his works continue to be studied and debated in the fields of political science and philosophy.",
                'author_books' => json_encode(['The Prince']),
                'author_born' => '1469-05-03',
                'author_demise' => '1527-06-21',
            ]);
        Author::create([
                'author_name' => 'Dante Alighieri',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Portrait_de_Dante.jpg/158px-Portrait_de_Dante.jpg',
                'author_explanation' => "Dante Alighieri (1265-1321) was an Italian poet and writer. He is best known for his epic poem The Divine Comedy, which is widely considered a masterpiece of world literature. The Divine Comedy is a journey through Hell, Purgatory, and Heaven, and explores themes of love, sin, redemption, and the nature of the divine. Dante's innovative use of vernacular Italian in his writing helped establish it as a literary language and had a profound impact on the development of Italian literature.",
                'author_books' => json_encode(['Inferno']),
                'author_born' => '1265-05-29',
                'author_demise' => '1321-09-14',
            ]);
        Author::create([
                'author_name' => 'Sophocles',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Sophocles_pushkin.jpg/177px-Sophocles_pushkin.jpg',
                'author_explanation' => "Sophocles (c. 497/496 - c. 406/405 BC) was an ancient Greek playwright and one of the three great tragedians of classical Greek drama. He is best known for his plays Oedipus Rex, Antigone, and Oedipus at Colonus. Sophocles' works explore themes of fate, free will, and the complexities of human nature. His plays are characterized by their strong characters, dramatic tension, and profound insights into the human condition.",
                'author_books' => json_encode(['Antigone','Oedipus Rex']),
                'author_born' => '497 BC',
                'author_demise' => '406 BC',
            ]);
        Author::create([
                'author_name' => 'William Gibson',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/William_Gibson_60th_birthday_portrait.jpg/187px-William_Gibson_60th_birthday_portrait.jpg',
                'author_explanation' => "William Gibson (born March 17, 1948) is an American-Canadian speculative fiction writer and essayist. He is credited with pioneering the subgenre of cyberpunk and coining the term 'cyberspace.' Gibson's best-known work is his debut novel, Neuromancer, which won several major science fiction awards and popularized the concept of cyberspace. His writing often explores themes of technology, society, and the impact of rapid technological advancements on human culture.",
                'author_books' => json_encode(['Neuromancer']),
                'author_born' => '1948-03-17',
                'author_demise' => 'Alive',
            ]);
        Author::create([
                'author_name' => 'Ray Bradbury',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Ray_Bradbury_%281975%29_-cropped-.jpg/195px-Ray_Bradbury_%281975%29_-cropped-.jpg',
                'author_explanation' => "Ray Bradbury (1920-2012) was an American author and screenwriter. He is best known for his dystopian novel Fahrenheit 451, which depicts a future society where books are outlawed and burned. Bradbury's works often explore themes of censorship, technology, and the power of imagination. His writing is characterized by its poetic style and evocative imagery. Bradbury's works have left a lasting impact on the science fiction and fantasy genres.",
                'author_books' => json_encode(['Fahrenheit 451']),
                'author_born' => '1920-08-22',
                'author_demise' => '2012-06-05',
            ]);
        Author::create([
                'author_name' => 'Edgar Allan Poe',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Edgar_Allan_Poe%2C_circa_1849%2C_restored%2C_squared_off.jpg/171px-Edgar_Allan_Poe%2C_circa_1849%2C_restored%2C_squared_off.jpg',
                'author_explanation' => "Edgar Allan Poe (1809-1849) was an American writer, poet, and literary critic. He is best known for his tales of mystery and the macabre, including 'The Tell-Tale Heart,' 'The Fall of the House of Usher,' and 'The Raven.' Poe's works often explore themes of death, madness, and the dark side of human nature. He is considered one of the greatest American writers and a pioneer of the detective fiction genre.",
                'author_books' => json_encode(['The Gold-Bug','William Wilson']),
                'author_born' => '1809-01-19',
                'author_demise' => '1849-10-07',
            ]);
        Author::create([
                'author_name' => 'Bret Easton Ellis',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Ellis.jpg/198px-Ellis.jpg',
                'author_explanation' => "Bret Easton Ellis (born March 7, 1964) is an American author and screenwriter. He is known for his controversial novel American Psycho, which portrays the life of a wealthy investment banker and serial killer. Ellis' works often explore themes of nihilism, materialism, and the dark side of American society. His writing style is characterized by its dark humor and graphic depictions of violence. Ellis has been both praised and criticized for his provocative and challenging works.",
                'author_books' => json_encode(['American Psycho']),
                'author_born' => '1964-03-07',
                'author_demise' => 'Alive',
            ]);
        Author::create([
                'author_name' => 'Bram Stoker',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Bram_Stoker_1906.jpg/186px-Bram_Stoker_1906.jpg',
                'author_explanation' => "Bram Stoker (1847-1912) was an Irish author and theatre manager. He is best known for his Gothic novel Dracula, which has become one of the most famous and enduring works of horror fiction. Dracula popularized the vampire genre and introduced the iconic character of Count Dracula. Stoker's writing often explores themes of desire, sexuality, and the clash between good and evil. His contribution to the horror genre has had a lasting influence on popular culture.",
                'author_books' => json_encode(['Dracula']),
                'author_born' => '1847-11-08',
                'author_demise' => '1912-04-20',
            ]);
        Author::create([
                'author_name' => 'Howard Pyle',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Howard_Pyle.png',
                'author_explanation' => "Howard Pyle (1853-1911) was an American illustrator and author. He is known for his illustrated books and magazines, especially those featuring stories of pirates and historical adventures. Pyle's works, such as The Merry Adventures of Robin Hood and Men of Iron, have become classics of children's literature. His detailed and dynamic illustrations brought the stories to life and helped establish a distinct American style of illustration.",
                'author_books' => json_encode(['The Merry Adventures of Robin Hood']),
                'author_born' => '1853-03-05',
                'author_demise' => '1911-11-09',
            ]);
        Author::create([
                'author_name' => 'Johanna Spyri',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Johanna-spyri.jpg',
                'author_explanation' => "Johanna Spyri (1827-1901) was a Swiss author best known for her children's novel Heidi. The novel tells the story of a young orphan girl named Heidi and her adventures in the Swiss Alps. Heidi has become one of the most popular and beloved works of children's literature. Spyri's writing captured the beauty of nature, the importance of family, and the innocence of childhood, making her a cherished author for generations of readers.",
                'author_books' => json_encode(['Heidi']),
                'author_born' => '1827-06-12',
                'author_demise' => '1901-07-07',
            ]);
        Author::create([
                'author_name' => 'Lewis Carroll',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/LewisCarrollSelfPhoto.jpg/170px-LewisCarrollSelfPhoto.jpg',
                'author_explanation' => "Lewis Carroll is the pen name of Charles Lutwidge Dodgson (1832-1898), an English author, mathematician, and photographer. He is best known for his children's books Alice's Adventures in Wonderland and Through the Looking-Glass. Carroll's works are characterized by their imaginative and nonsensical nature, combining wordplay, logic puzzles, and fantastical settings. His books have had a profound influence on literature, popular culture, and the genre of literary nonsense.",
                'author_books' => json_encode(["Alice's Adventures in Wonderland"]),
                'author_born' => '1832-01-27',
                'author_demise' => '1898-01-14',
            ]);
        Author::create([
                'author_name' => 'Wilkie Collins',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Wilkie-Collins.jpg/166px-Wilkie-Collins.jpg',
                'author_explanation' => "Wilkie Collins (1824-1889) was an English novelist and playwright. He is considered one of the pioneers of detective fiction and is best known for his novel The Woman in White. Collins' works often revolve around intricate plots, suspenseful storytelling, and psychological intrigue. His novels, such as The Moonstone and Armadale, have left a lasting impact on the mystery and suspense genres.",
                'author_books' => json_encode(['The Moonstone']),
                'author_born' => '1824-01-08',
                'author_demise' => '1889-09-23',
            ]);
        Author::create([
                'author_name' => 'Agatha Christie',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/c/cf/Agatha_Christie.png',
                'author_explanation' => "Agatha Christie (1890-1976) was an English writer known for her detective novels and short stories. She is considered one of the best-selling authors of all time, with works such as Murder on the Orient Express and And Then There Were None. Christie's detective characters, including Hercule Poirot and Miss Marple, have become iconic figures in the mystery genre. Her clever plotting, surprising twists, and memorable characters have made her a beloved author for readers around the world.",
                'author_books' => json_encode(['And Then There Were None','The Murder of Roger Ackroyd']),
                'author_born' => '1890-09-15',
                'author_demise' => '1976-01-12',
            ]);
        Author::create([
                'author_name' => 'Herodotus',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Marble_bust_of_Herodotos_MET_DT11742_%28cropped%29.jpg/180px-Marble_bust_of_Herodotos_MET_DT11742_%28cropped%29.jpg',
                'author_explanation' => "Herodotus (c. 484-425 BC) was an ancient Greek historian known as the 'Father of History.' His most famous work is The Histories, which chronicles the Persian Wars and provides valuable insights into the ancient world. Herodotus' approach to history involved collecting and recounting stories and traditions from various cultures, making him one of the earliest practitioners of historical research and ethnography.",
                'author_books' => json_encode(['Histories']),
                'author_born' => '484 BC',
                'author_demise' => '425 BC',
            ]);
        Author::create([
                'author_name' => 'Xenophon',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Xenophon.jpg/155px-Xenophon.jpg',
                'author_explanation' => "Xenophon (c. 431-354 BC) was an ancient Greek historian, philosopher, and soldier. He is known for his historical and biographical works, including Anabasis, which recounts the story of the Greek mercenaries' journey from Persia back to Greece, and Cyropaedia, a fictionalized biography of Cyrus the Great. Xenophon's writings provide valuable insights into ancient Greek society, warfare, and philosophy.",
                'author_books' => json_encode(['Anabasis']),
                'author_born' => '431 BC',
                'author_demise' => '354 BC',
            ]);
        Author::create([
                'author_name' => 'Homer',
                'author_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Homer_British_Museum.jpg/190px-Homer_British_Museum.jpg',
                'author_explanation' => "Homer is an ancient Greek poet traditionally believed to have authored two of the greatest epic poems of ancient Greece: the Iliad and the Odyssey. These poems have had a profound influence on Western literature and are considered foundational works of Western civilization. The Iliad narrates the events of the Trojan War, while the Odyssey follows the adventures of Odysseus as he tries to return home. Although little is known about Homer as a historical figure, his poems continue to be studied and celebrated for their literary and cultural significance.",
                'author_books' => json_encode(['Iliad','Odysseia']),
                'author_born' => 'Unknown',
                'author_demise' => 'Unknown',
            ]);
    }
}
