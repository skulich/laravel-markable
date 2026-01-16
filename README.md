# Laravel Markable

[//]: # ([![Latest Version on Packagist]&#40;https://img.shields.io/packagist/v/skulich/laravel-markable.svg&#41;]&#40;https://packagist.org/packages/skulich/laravel-markable&#41;)

[//]: # (![PHP Version Require]&#40;https://img.shields.io/packagist/php-v/skulich/laravel-markable&#41;)

[//]: # (![Laravel Version]&#40;https://img.shields.io/badge/laravel-%5E12.0%20-red?logo=laravel&#41;)

[//]: # ([![Run Tests]&#40;https://github.com/skulich/laravel-markable/actions/workflows/tests.yml/badge.svg&#41;]&#40;https://github.com/skulich/laravel-markable/actions&#41;)

[//]: # (![Code Coverage]&#40;https://img.shields.io/badge/coverage-100%25-brightgreen&#41;)

[//]: # (![License]&#40;https://img.shields.io/packagist/l/skulich/laravel-markable.svg&#41;)

[//]: # (![Total Downloads]&#40;https://img.shields.io/packagist/dt/skulich/laravel-markable.svg&#41;)

**Laravel Markable** is a powerful polymorphic tagging system that allows users to "mark" any content. Whether it's a
simple like, a bookmark with notes, or a complex reaction, Markable handles it elegantly using PHP 8 attributes.

Integrate **likes, bookmarks, favorites, reactions**, and any custom marks into your Laravel application in
minutes — using a single, robust polymorphic solution focused on developer experience and performance.

### Key Features
- **Polymorphic Relationships:** Mark any Eloquent model (Posts, Comments, Users, etc.).
- **PHP 8 Attributes:** Define allowed interactions directly in the model header.
- **Counter Cache:** Automatically tracks counts (e.g., `likes_count`) for instant display.
- **JSON Metadata:** Store notes or extra data with each interaction.


# Table of contents

* [Installation](#installation)
* [Usage](#usage)
* [Tests](#tests)
* [Changelog](#changelog)
* [Contributing](#contributing)
* [License](#license)

## Installation

Install the package via Composer.

```shell
composer require skulich/laravel-markable

# Publish config & migration
php artisan vendor:publish --provider="SKulich\Markable\MarkableServiceProvider"

# Run migrations
php artisan migrate
```

## Usage

...

## Tests

Run the entire test suite:

```shell
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for more information.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
