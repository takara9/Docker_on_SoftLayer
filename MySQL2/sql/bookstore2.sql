INSERT INTO publishers (name, created)
   VALUES ('OREILLY', NOW());
INSERT INTO publishers (name, created)
   VALUES ('KOUDAN-SHA', NOW());

INSERT INTO authors (name, created)
   VALUES ('David Sklar', NOW());
INSERT INTO authors (name, created)
   VALUES ('Yugui', NOW());
INSERT INTO authors (name, created)
   VALUES ('Guido van Rossum', NOW());
INSERT INTO authors (name, created)
   VALUES ('Sugiyama Susumu', NOW());

INSERT INTO books (title, price, isbn, author_id, publisher_id,created)
   VALUES ('Introduction PHP5',2800, '4-87311-257-5', 1, 1, NOW());
INSERT INTO books (title, price, isbn, author_id, publisher_id,created)
   VALUES ('Indroduction Ruby',2200, '978-4-87311-367-8', 2, 1, NOW());
INSERT INTO books (title, price, isbn, author_id, publisher_id,created)
   VALUES ('Python tutorial',1500, '978-4-87311-442-2', 3, 1, NOW());
INSERT INTO books (title, price, isbn, author_id, publisher_id,created)
   VALUES ('Machine learning',2800, '978-4-06-153821-4', 4, 2, NOW());




