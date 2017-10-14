# Simple closures container for Laravel.

[![Latest Stable Version](https://poser.pugx.org/lachezargrigorov/laravel-closures-container/v/stable)](https://packagist.org/packages/lachezargrigorov/laravel-closures-container)
[![Latest Unstable Version](https://poser.pugx.org/lachezargrigorov/laravel-closures-container/v/unstable)](https://packagist.org/packages/lachezargrigorov/laravel-closures-container)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/lachezargrigorov/laravel-closures-container/master.svg)](https://travis-ci.org/lachezargrigorov/laravel-closures-container)
[![Total Downloads](https://poser.pugx.org/lachezargrigorov/laravel-closures-container/downloads)](https://packagist.org/packages/lachezargrigorov/laravel-closures-container)

Easy to use closures container. First register the closure then use it anywhere.

## Install

Via Composer

``` bash
$ composer require lachezargrigorov\laravel-closures-container
```

If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:

```php
Lachezargrigorov\ClosuresContainer\ClosuresContainerServiceProvider::class,
```

If you do not run Laravel 5.5 and want to use the facade, add this to your aliases in app.php:


```php
"Closures" => Lachezargrigorov\ClosuresContainer\Facades\Facade::class,
```

## Usage

``` php

//using Facades

Closures::register("sumTwoNumbers",function($a,$b)
{
return $a + $b;
});

$sum = Closures::sumTwoNumbers(1,2); //3

$bool = Closures::isRegistered("sumTwoNumbers");

//using IOC

$closures = app("closures");

$closures->register("sumTwoNumbers",function($a,$b)
{
return $a + $b;
});

$sum = $closures->sumTwoNumbers(1,2); //3

$bool = $closures->isRegistered("sumTwoNumbers");

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see  [CONTRIBUTING](CONTRIBUTING.md) , [ISSUE_TEMPLATE](ISSUE_TEMPLATE.md) and [PULL_REQUEST_TEMPLATE](PULL_REQUEST_TEMPLATE.md) for details.

## Security

If you discover any security related issues, please email lachezar@grigorov.website instead of using the issue tracker.

## Credits

- [Lachezar Grigorov](http://grigorov.website)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
