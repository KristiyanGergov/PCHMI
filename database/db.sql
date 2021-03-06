CREATE DATABASE shisha_share;
CREATE TABLE users (
  id       INT AUTO_INCREMENT PRIMARY KEY,
  email    VARCHAR(63),
  username VARCHAR(63) UNIQUE,
  contact  VARCHAR(63),
  pass     VARCHAR(255)
);

CREATE TABLE items (
  id          INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name        VARCHAR(63),
  description TEXT,
  price       FLOAT,
  available   BOOLEAN,
  type        VARCHAR(63),
  user        INT,
  image       VARCHAR(63)
);
