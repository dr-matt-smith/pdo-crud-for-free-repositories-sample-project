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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email dr_matt_smith@me.com instead of using the issue tracker.

## Credits

- [Matt Smith][https://github.com/dr-matt-smith]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mattsmithdev/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mattsmithdev/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mattsmithdev/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mattsmithdev/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mattsmithdev/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mattsmithdev/:package_name
[link-travis]: https://travis-ci.org/mattsmithdev/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/mattsmithdev/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mattsmithdev/:package_name
[link-downloads]: https://packagist.org/packages/mattsmithdev/:package_name
[link-author]: https://github.com/mattsmithdev
[link-contributors]: ../../contributors
