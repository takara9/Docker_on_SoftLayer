CREATE VIEW vbooks
AS SELECT books.id, title, price, authors.name AS auth_name,
          books.isbn, books.comment,
          publishers.name AS pub_name, books.created
 FROM books
 LEFT JOIN (authors)
        ON books.author_id = authors.id
 LEFT JOIN (publishers)
        ON books.publisher_id = publishers.id
;

