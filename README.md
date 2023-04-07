# Laravel Country State City


[![Latest Version on Packagist](https://img.shields.io/packagist/v/rajibbinalam/country-state-city.svg?style=flat-square)](https://packagist.org/packages/rajibbinalam/country-state-city)
[![Total Downloads](https://img.shields.io/packagist/dt/rajibbinalam/country-state-city.svg?style=flat-square)](https://packagist.org/packages/rajibbinalam/country-state-city)

#### This Package is provid you world info about the country state and city name with their some local information


## Installation

You can install the package via composer:

```bash
composer require rajibbinalam/country-state-city
```

Publish Vendor Files: Find the below files
 - config > CountryStateCity.php
 - database > migrations > country , state, city and timezone 
 - database > seeders > country , state, city and timezone 

```bash
php artisan vendor:publish 
# Provider: rajib\LaravelCountryStateCity\CountryStateCityServiceProvider
```

## Configuration The Migrations Table Name and Field

```php
return [
    
	/*
	|--------------------------------------------------------------------
	| Configaration Your Migrations.
    |----------------------------------------------------------------
    | Set the table_name or use default LIKE: 'table_name' => 'countries',
    |----------------------------------------------------------------
    | 'required' => true, will be added to the migration as a field
	|---------------------------------------------------------------------
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

## Migrate
```bash
php artisan migrate
```
## Database Seed
 Register the Seeders file to your ```DatabaseSeeder.php``` and run the seed commands

```php
$this->call([
    CountryTableSeeder::class,
    StateTableSeeder::class,
    CityTableSeeder::class,
    StateTableSeeder::class,
]);
```
```bash
php artisan db:seed
```

## Contributing
We will accept your Contribution with respect.
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Rajib Bin Alam](https://github.com/rajibbinalam)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
