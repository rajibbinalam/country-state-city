# Laravel Country State City


[![Latest Version on Packagist](https://img.shields.io/packagist/v/rajibbinalam/country-state-city.svg?style=flat-square)](https://packagist.org/packages/rajibbinalam/country-state-city)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rajibbinalam/country-state-city/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rajibbinalam/country-state-city/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rajibbinalam/country-state-city.svg?style=flat-square)](https://packagist.org/packages/rajibbinalam/country-state-city)

This Package is provided 

## Accept the Contribution with respect

## Installation

You can install the package via composer:

```bash
composer require rajibbinalam/country-state-city
```

Publish and run the migrations with:

```bash
php artisan vendor:publish --tag="rajib\LaravelCountryStateCity\CountryStateCityServiceProvider"

```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug-config"
```

## Configuration The Migrations Table Name and Field

```php
return [
    
	/*
	|--------------------------------------------------------------------------
	| Configaration Your Migrations.
    |----------------------------------------------------------------
    | Set the table_name or use default LIKE: 'table_name' => 'countries',
    |----------------------------------------------------------------
    | 'required' => true, will be added to the migration as a field
	|--------------------------------------------------------------------------
	*/
	'migrations' => [
		'countries' => [
			'table_name' => 'countries',
			'optional_fields' => [
				'phone_code' => [
					'required' => true,
					'length' => 5,
				],
				'iso3' => [
					'required' => false,
					'length' => 3,
				],
			],
		],
	],
];
```

## Migrate and Database Seed
 Register the Seeders file to your database seeder and run the migrations and seed commands
```php
php artisan migrate
php artisan db:seed
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rajib Bin Alam](https://github.com/rajibbinalam)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
