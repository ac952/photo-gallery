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
INSERT INTO `pictures` (id, image, image_name) VALUES (1, 'uploads/landscape1.jpg', 'landscape1');
INSERT INTO `pictures` (id, image, image_name) VALUES (2, 'uploads/landscape2.jpg', 'landscape2');
INSERT INTO `pictures` (id, image, image_name) VALUES (3, 'uploads/landscape3.jpg', 'landscape3');
INSERT INTO `pictures` (id, image, image_name) VALUES (4, 'uploads/landscape4.jpg', 'landscape4');
INSERT INTO `pictures` (id, image, image_name) VALUES (5, 'uploads/landscape5.jpg', 'landscape5');
INSERT INTO `pictures` (id, image, image_name) VALUES (6, 'uploads/landscape6.jpg', 'landscape6');

INSERT INTO `pictures` (id, image, image_name) VALUES (7, 'uploads/new_york.jpg', 'new york');
INSERT INTO `pictures` (id, image, image_name) VALUES (8, 'uploads/tokyo.jpg', 'tokyo');
INSERT INTO `pictures` (id, image, image_name) VALUES (9, 'uploads/shanghai.jpg', 'shanghai');
INSERT INTO `pictures` (id, image, image_name) VALUES (10, 'uploads/dubai.jpg', 'dubai');

INSERT INTO `pictures` (id, image, image_name) VALUES (11, 'uploads/jaguar.jpg', 'jaguar');
INSERT INTO `pictures` (id, image, image_name) VALUES (12, 'uploads/penguins.jpg', 'penguins');
INSERT INTO `pictures` (id, image, image_name) VALUES (13, 'uploads/horses.jpg', 'horses');
INSERT INTO `pictures` (id, image, image_name) VALUES (14, 'uploads/giraffe.jpg', 'giraffe');
INSERT INTO `pictures` (id, image, image_name) VALUES (15, 'uploads/raccoon.jpg', 'raccoon');

INSERT INTO `pictures` (id, image, image_name) VALUES (16, 'uploads/sushi.jpg', 'sushi');
INSERT INTO `pictures` (id, image, image_name) VALUES (17, 'uploads/ramen.jpg', 'ramen');
INSERT INTO `pictures` (id, image, image_name) VALUES (18, 'uploads/pizza.jpg', 'pizza');
INSERT INTO `pictures` (id, image, image_name) VALUES (19, 'uploads/curry_and_roti.jpg', 'curry and roti');
INSERT INTO `pictures` (id, image, image_name) VALUES (20, 'uploads/greek_salad.jpg', 'greek salad');

INSERT INTO `pictures` (id, image, image_name) VALUES (21, 'uploads/workspace.jpg', 'workspace');
INSERT INTO `pictures` (id, image, image_name) VALUES (22, 'uploads/bedroom.jpg', 'bedroom');
INSERT INTO `pictures` (id, image, image_name) VALUES (23, 'uploads/painting.jpg', 'painting');


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
