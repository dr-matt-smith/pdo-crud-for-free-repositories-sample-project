# pdo-crud-for-free-repositories-sample-project


This sample project illustrates how to use the PHP package `pdo-crud-for-free-repositories`

All code is (intended :-) to follow PSR-1, PSR-2 coding standards. Classes are following the PSR-4 autoloading standard.

## Install

Via Git, then run Composer to install dependencies.

``` bash
$ git clone git@github.com:dr-matt-smith/pdo-crud-for-free-repositories-sample-project.git

$ composer update
```

## Setup MySQL database

Run the SQL found in directory `/db`

Set your constants to the appropriate DB name / user / password in `/public/index.php':

```
define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'evote');
```

## Run

1. Point your webserver root directory to `/public`.
1. Run the webserver
1. Run the MySQL server
1. Open a browser to `http://localhost`

    (with port if required, e.g. `http://localhost:8888` if webserver port IS `8888`)


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
