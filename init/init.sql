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
	file_ext TEXT NOT NULL
);
INSERT INTO documents (id, file_name, file_ext) VALUES (2, 'landscape', 'png');


CREATE TABLE pictures (
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`image` TEXT NOT NULL,
	`image_name` TEXT NOT NULL
);
INSERT INTO `pictures` (id, image, image_name) VALUES (1, 'uploads/land1.jpg', 'land1');
INSERT INTO `pictures` (id, image, image_name) VALUES (2, 'uploads/land2.jpg', 'land2');
INSERT INTO `pictures` (id, image, image_name) VALUES (3, 'uploads/land3.jpg', 'land3');
INSERT INTO `pictures` (id, image, image_name) VALUES (4, 'uploads/land4.jpg', 'land4');
INSERT INTO `pictures` (id, image, image_name) VALUES (5, 'uploads/land5.jpg', 'land5');
INSERT INTO `pictures` (id, image, image_name) VALUES (6, 'uploads/land6.jpg', 'land6');

INSERT INTO `pictures` (id, image, image_name) VALUES (7, 'uploads/city1.jpg', 'city1');
INSERT INTO `pictures` (id, image, image_name) VALUES (8, 'uploads/city2.jpg', 'city2');
INSERT INTO `pictures` (id, image, image_name) VALUES (9, 'uploads/city3.jpg', 'city3');
INSERT INTO `pictures` (id, image, image_name) VALUES (10, 'uploads/city4.jpg', 'city4');

INSERT INTO `pictures` (id, image, image_name) VALUES (11, 'uploads/animal1.jpg', 'animal1');
INSERT INTO `pictures` (id, image, image_name) VALUES (12, 'uploads/animal2.jpg', 'animal2');
INSERT INTO `pictures` (id, image, image_name) VALUES (13, 'uploads/animal3.jpg', 'animal3');
INSERT INTO `pictures` (id, image, image_name) VALUES (14, 'uploads/animal4.jpg', 'animal4');
INSERT INTO `pictures` (id, image, image_name) VALUES (15, 'uploads/animal5.jpg', 'animal5');

INSERT INTO `pictures` (id, image, image_name) VALUES (16, 'uploads/food1.jpg', 'food1');
INSERT INTO `pictures` (id, image, image_name) VALUES (17, 'uploads/food2.jpg', 'food2');
INSERT INTO `pictures` (id, image, image_name) VALUES (18, 'uploads/food3.jpg', 'food3');
INSERT INTO `pictures` (id, image, image_name) VALUES (19, 'uploads/food4.jpg', 'food4');
INSERT INTO `pictures` (id, image, image_name) VALUES (20, 'uploads/food5.jpg', 'food5');

INSERT INTO `pictures` (id, image, image_name) VALUES (21, 'uploads/personal1.jpg', 'personal1');
INSERT INTO `pictures` (id, image, image_name) VALUES (22, 'uploads/personal2.jpg', 'personal2');
INSERT INTO `pictures` (id, image, image_name) VALUES (23, 'uploads/personal3.jpg', 'personal3');


CREATE TABLE tags (
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`tag_name` TEXT NOT NULL
);
INSERT INTO `tags` (id, tag_name) VALUES (1, 'landscape');
INSERT INTO `tags` (id, tag_name) VALUES (2, 'city');
INSERT INTO `tags` (id, tag_name) VALUES (3, 'animal');
INSERT INTO `tags` (id, tag_name) VALUES (4, 'food');
INSERT INTO `tags` (id, tag_name) VALUES (5, 'personal');


CREATE TABLE image_tags (
	`id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`pictures_id` INTEGER NOT NULL,
	`tags_id` INTEGER NOT NULL
);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (1, 1, 1);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (2, 2, 1);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (3, 3, 1);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (4, 4, 1);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (5, 5, 1);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (6, 6, 1);
-- multiple tag, cities can also be landscape
-- one tag can have multiple pictures
-- ex: city tag has landscape pictures 1 and 3
-- INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (24, 1, 2);
-- INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (25, 3, 2);

INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (7, 7, 2);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (8, 8, 2);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (9, 9, 2);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (10, 10, 2);

INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (11, 11, 3);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (12, 12, 3);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (13, 13, 3);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (14, 14, 3);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (15, 15, 3);

INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (16, 16, 4);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (17, 17, 4);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (18, 18, 4);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (19, 19, 4);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (20, 20, 4);

INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (21, 21, 5);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (22, 22, 5);
INSERT INTO `image_tags` (id, pictures_id, tags_id) VALUES (23, 23, 5);


COMMIT;
