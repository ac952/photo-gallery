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
INSERT INTO accounts (username, password) VALUES ('jt465', '$2y$10$u4AvsiK1it16rHjNw0Z2d.23ePIPmx82wn/MxeuC07vaxvUuT8com');
-- Cornell22

CREATE TABLE documents (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	file_name TEXT NOT NULL,
	file_ext TEXT NOT NULL,
	description TEXT
);
INSERT INTO documents (id, file_name, file_ext, description) VALUES (1, 'lab-07.pdf', 'pdf', 'Lab 7 write-up');


CREATE TABLE pictures (
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`image` TEXT NOT NULL,
	`tag_name` TEXT NOT NULL
);
INSERT INTO `pictures` (id, image, tag_name) VALUES (1, 'uploads/land1.jpg', 'landscape');
INSERT INTO `pictures` (id, image, tag_name) VALUES (2, 'uploads/land2.jpg', 'landscape');
INSERT INTO `pictures` (id, image, tag_name) VALUES (3, 'uploads/land3.jpg', 'landscape');
INSERT INTO `pictures` (id, image, tag_name) VALUES (4, 'uploads/land4.jpg', 'landscape');
INSERT INTO `pictures` (id, image, tag_name) VALUES (5, 'uploads/land5.jpg', 'landscape');
INSERT INTO `pictures` (id, image, tag_name) VALUES (6, 'uploads/land6.jpg', 'landscape');

INSERT INTO `pictures` (id, image, tag_name) VALUES (7, 'uploads/city1.jpg', 'city');
INSERT INTO `pictures` (id, image, tag_name) VALUES (8, 'uploads/city2.jpg', 'city');
INSERT INTO `pictures` (id, image, tag_name) VALUES (9, 'uploads/city3.jpg', 'city');
INSERT INTO `pictures` (id, image, tag_name) VALUES (10, 'uploads/city4.jpg', 'city');

INSERT INTO `pictures` (id, image, tag_name) VALUES (11, 'uploads/animal1.jpg', 'animal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (12, 'uploads/animal2.jpg', 'animal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (13, 'uploads/animal3.jpg', 'animal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (14, 'uploads/animal4.jpg', 'animal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (15, 'uploads/animal5.jpg', 'animal');

INSERT INTO `pictures` (id, image, tag_name) VALUES (16, 'uploads/food1.jpg', 'food');
INSERT INTO `pictures` (id, image, tag_name) VALUES (17, 'uploads/food2.jpg', 'food');
INSERT INTO `pictures` (id, image, tag_name) VALUES (18, 'uploads/food3.jpg', 'food');
INSERT INTO `pictures` (id, image, tag_name) VALUES (19, 'uploads/food4.jpg', 'food');
INSERT INTO `pictures` (id, image, tag_name) VALUES (20, 'uploads/food5.jpg', 'food');

INSERT INTO `pictures` (id, image, tag_name) VALUES (21, 'uploads/personal1.jpg', 'personal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (22, 'uploads/personal2.jpg', 'personal');
INSERT INTO `pictures` (id, image, tag_name) VALUES (23, 'uploads/personal3.jpg', 'personal');

COMMIT;
