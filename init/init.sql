/* TODO: create tables */
BEGIN TRANSACTION;

CREATE TABLE `accounts` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`username`	TEXT NOT NULL UNIQUE,
	`password`	TEXT NOT NULL,
	`session`	TEXT UNIQUE
);

/* TODO: initial seed data */
INSERT INTO accounts (username, password) VALUES ('ac952', '$2y$10$Fe322Tluh2Sx9OKdmMKPh.qPRjYjB4YquCE3cOetiX7bgrV0B9KYS');
-- Cornell1
-- INSERT INTO accounts (username, password) VALUES ('jt465', 'Cornell22');
COMMIT;
