CREATE DATABASE BooksMedia;

CREATE TABLE BookInfo (
  id INT(11) NOT NULL auto_increment PRIMARY KEY,
  book_title VARCHAR(100) NOT NULL,
  book_author VARCHAR(100) NOT NULL,
  book_date YEAR(4) NOT NULL,
  book_intro VARCHAR(500) NOT NULL,
  book_image VARCHAR(500) NOT NULL
);

INSERT INTO BookInfo (book_title, book_author, book_date, book_intro, book_image) VALUES
('Dayswork', 'Bachelder Chris', 2024, 'Dayswork tells the story of a woman who spends the endless days of the pandemic sorting fact from fiction in the life and work of Herman Melville. -- Provided by publisher.', 'https://www.syndetics.com/index.aspx?isbn=9781324065401&issn=/LC.JPG&client=sepup&type=xw12'),
('Big Swiss', 'Beagin Jen', 2023, 'Greta lives with her friend Sabine in an ancient Dutch farmhouse in Hudson, New York. The house, built in 1737, is unrenovated, uninsulated, and full of bees. Greta spends her days transcribing therapy sessions for a sex coach who calls himself Om. She becomes infatuated with his newest client, a repressed married woman she affectionately refers to as Big Swiss, since shes tall, stoic, and originally from Switzerland. ... ---Provided by publisher.', 'https://www.syndetics.com/index.aspx?isbn=9781982153083&issn=/LC.JPG&client=sepup&type=xw12&oclc=1335121846'),
('School Trip', 'Craft Jerry', 2023, 'Eighth grader Drew Ellis recognizes that he isnt afforded the same opportunities, no matter how hard he works, that his privileged classmates at the Riverdale Academy Day School take for granted, and to make matters worse, Drew begins to feel as if his good friend Liam might be one of those privileged kids and is finding it hard not to withdraw, even as their mutual friend Jordan tries to keep their group of friends together', 'https://www.syndetics.com/index.aspx?isbn=9780062885548&issn=/LC.JPG&client=sepup&type=xw12&oclc=1373777322');