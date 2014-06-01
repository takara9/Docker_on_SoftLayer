CREATE TABLE books (
  id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title        VARCHAR(100),
  price        INT(11) DEFAULT NULL,
  isbn         VARCHAR(20),
  comment      TEXT,
  author_id    INT,
  publisher_id INT,
  is_finish    tinyint(1) DEFAULT NULL,
  created      DATETIME DEFAULT NULL,
  modified     DATETIME DEFAULT NULL
);

CREATE TABLE authors (
  id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name         VARCHAR(50),
  created      DATETIME DEFAULT NULL,
  modified     DATETIME DEFAULT NULL
);

CREATE TABLE publishers (
  id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name         VARCHAR(50),
  created      DATETIME DEFAULT NULL,
  modified     DATETIME DEFAULT NULL
);



