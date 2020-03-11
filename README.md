# pdo-crud-for-free-repositories-sample-project


This sample project illustrates how to use the PHP package `pdo-crud-for-free-repositories`

All code is (intended :-) to follow PSR-1, PSR-2 coding standards. Classes are following the PSR-4 autoloading standard.

## Install

Via Git:

``` bash
$ git clone git@github.com:dr-matt-smith/pdo-crud-for-free-repositories-sample-project.git
```

Then run Composer to populate the `/vendor` directory with dependencies:
``` bash
$ composer install
```

## MySQL database settings`/config/db.php`

File `/config/db.php` defines the 4 required constants for DB access.

Update them as required for your own MySQL setup:
```
define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'evote');
```

Create the database schema, e.g. `evote` in this example

## Run the migration and initial data fixtures script

In folder `db` is a file `migrateAndLoadFixtures.php`. Run this script to create the DB table `movie`, and insert 2 initial records:

```bash
php migrateAndLoadFixtures.php
```

## Run the web server

Run your web server, making `/public` the web root:

```bash
php -S localhost:8000 -t public
```

## Open a browser to `http://localhost:8000`

or whatever port your webserver is running at

![screenshot of browser](screenshot.png)
