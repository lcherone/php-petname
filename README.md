**PHP Petname**
=========

[![Build Status](https://travis-ci.org/lcherone/php-petname.svg?branch=master)](https://travis-ci.org/lcherone/php-petname)
[![StyleCI](https://styleci.io/repos/95988446/shield?branch=master)](https://styleci.io/repos/103975908)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lcherone/php-petname/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lcherone/php-petname/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/lcherone/php-petname/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/lcherone/php-petname/code-structure/master/code-coverage)
[![Packagist Version](https://img.shields.io/packagist/v/lcherone/php-petname.svg?style=flat-square)](https://github.com/lcherone/php-petname/releases)
[![Packagist Downloads](https://img.shields.io/packagist/dt/lcherone/php-petname.svg?style=flat-square)](https://packagist.org/packages/plinker/core)

A utility to generate "pet names", consisting of a random combination of adverbs, an adjective, and an animal name.

Ported from: https://github.com/dustinkirkland/golang-petname to a static PHP class.


## Install

Require this package with composer using the following command:

``` bash
$ composer require lcherone/php-petname
```

## Example

	<?php
	require 'vendor/autoload.php';

	use LCherone\PHPPetname as Petname;

	// werewolf
	echo Petname::Generate(1);

	// peacefull-werewolf
	echo Petname::Generate(2);

	// peacefull mighty werewolf
	echo Petname::Generate(3, ' ');

	// peacefull-mighty-tough-werewolf
	echo Petname::Generate(4);


## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING) for details.


## Credits

- [Lawrence Cherone](https://github.com/lcherone)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.