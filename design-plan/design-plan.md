# Project 3 - Design & Plan

Your Name: Aileen Cai ac952

## 1. Persona

I've selected **[Abby]** as my persona.

I've selected my persona because... [Tell us why you picked your persona in 1-3 sentences.]

I've selected my persona because her motivations and attitudes toward technology is parallel to mine. My information processing style is also "burst-y" so I feel that our similarities would help me design a webpage that would be more user friendly to her.

## 2. Sketches & Wireframes

### Sketches

[Insert your sketches here.]
![](Scan.jpeg)

### Wirefames

[Insert your wireframes here.]
![](home.jpg)
![](gallery.jpg)
![](upload.jpg)
![](delete.jpg)
![](login.jpg)

[Explain why your design would be effective for your persona. 1-3 sentences.]
My sketches meet the need of my personal because it is simple and intuitive.
Since Abby is risk averse and has low confidence about doing unfamiliar tasks,
I decided to place the login at the top of the home page only. All of the
 options on the gallery(side bar) will be present at every
page so that she won't have to look for the back button.

## 3. Database Schema Plan

[Describe the structure of your database. You may use words or a picture.
A bulleted list is probably the simplest way to do this.]

In my database, I will have two tables. One primarily for the photos and
another for the tags. The photos table will contain an id and name of the photo.
 The tags table will also contain an id and photo_id as the foreign key. Each
 field and their types are listed below.

Table: photos
* field 1: id INTEGER {PRIMARY KEY, NOT NULL, AUTO INCREMENT,UNIQUE}
* field 2: photo_name TEXT {NOT_NULL}
* field 3: photo_img BLOB {NOT NULL}

Table: tags
* field 1: id PRIMARY KEY, NOT NULL, AUTO INCREMENT,UNIQUE
* field 2: tag_name TEXT {NOT_NULL}
* field 3: photos_id BLOB {NOT NULL}

## 4. Database Query Plan

[Plan your database queries. You may use natural language, pseudocode, or SQL.]
1. All records
SQL: SELECT * FROM photos;
2. Search photo by name
SQL: "SELECT photo_img FROM photos WHERE photo_name = "waterfall.jpeg";
3. Search photo by tags
SQL: "SELECT photo_img FROM tags WHERE photos_id = 1;


## 5. Structure and Pseudocode

### Structure

[List the PHP files you will have. You will probably want to do this with a bulleted list.]

* index.php - main page.
* includes/init.php - stuff that useful for every web page.
* includes/header.php - navigation bar for each page
* gallery.php - contains a page with all the photos
* landscape.php - (tag)contains a page with landscape photos
* personal.php - (tag)contains a page with personal photos
* animals.php -(tag)contains a page with animal photos
* food.php -(tag)contains a page with food photos
* cities.php -(tag)contains a page with city photos
* login.php - login form page
* logout.php - logout page
* addphoto.php - upload photo form


### Pseudocode

[For each PHP file, plan out your pseudocode. You probably want a subheading for each file.]

#### index.php

```
include init.php

welcome screen using html and static photos in processing
button on right hand corner to log in.
```

#### includes/init.php

```
make an array for pages
messages = array to store messages for user (you may remove this)

// DB helper functions (you do not need to write this out since they are provided.)
db = connect to db
make function for executing sql
make function open_or_init_sqlite_db to check if sqlfile exists
...

```

#### includes/header.php - navigation bar for each page
```
navigation bar using html and php
for loop for pages
echo link of the page by getting page_id
```

#### gallery.php - contains a page with all the photos
```
include init.php
create a connection to the sql Database
$db = open_or_init_sqlite_db('photogallery.sqlite', "init/init.sql");
make a function to execute the sql query, return null if query not returned
function for getting the text(photo title) and photo_img
echo the text by filtering (escape output)

```

#### landscape.php - (tag)contains a page with landscape photos
```
TODO
```

#### personal.php - (tag)contains a page with personal photos
```
TODO
```

#### animals.php -(tag)contains a page with animal photos
```
TODO
```

#### food.php -(tag)contains a page with food photos
```
TODO
```

#### cities.php -(tag)contains a page with city photos
```
TODO
```

#### login.php - login form page
```
include init.php
login page id
html form with text inputs:
username:
password:
and submit button
```

#### logout.php - logout page
```
include init.php
message to user that they have logged logout
```

#### addphoto.php - upload photo form
```
include init.php
page id= add photos
create a connection to the sql database created
$db = open_or_init_sqlite_db('photogallery.sqlite', "init/init.sql");

html multipart form with inputs:
filter input for the photo name to make sure it is text using
htmlspecialchars
photo name:
photo upload:
and a submit value
```

## 6. Seed Data - Username & Passwords

[List the usernames and passwords for your users]

* ac952 : Cornell1
* jt465 : Cornell22