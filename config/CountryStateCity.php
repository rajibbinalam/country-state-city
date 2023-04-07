<?php

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
					'required' => true,
					'length' => 3,
				],
				'iso2' => [
					'required' => true,
					'length' => 3,
				],
				'capital' => [
					'required' => true,
				],
				'currency' => [
					'required' => true,
				],
				'currency_symbol' => [
					'required' => true,
				],
				'tld' => [
					'required' => true,
				],
				'native' => [
					'required' => true,
				],
				'region' => [
					'required' => true,
				],
				'subregion' => [
					'required' => true,
				],
				'latitude' => [
					'required' => true,
				],
				'longitude' => [
					'required' => true,
				],
				'emoji' => [
					'required' => true,
				],
				'emojiU' => [
					'required' => true,
				],
			],
		],
		'states' => [
			'table_name' => 'states',
			'optional_fields' => [
				'country_code' => [
					'required' => true,
					'length' => 3,
				],
				'state_code' => [
					'required' => true,
					'length' => 3,
				],
				'latitude' => [
					'required' => true,
				],
				'longitude' => [
					'required' => true,
				],
			],
		],
		'cities' => [
			'table_name' => 'cities',
			'optional_fields' => [
				'country_code' => [
					'required' => true,
					'length' => 3,
				],
				'state_code' => [
					'required' => true,
					'length' => 3,
				],
				'latitude' => [
					'required' => true,
				],
				'longitude' => [
					'required' => true,
				],
			],
		],
		'timezones' => [
			'table_name' => 'timezones',
            'optional_fields' => [
				'gmtOffset' => [
					'required' => true,
					'length' => 3,
				],
				'gmtOffsetName' => [
					'required' => true,
					'length' => 3,
				],
				'abbreviation' => [
					'required' => true,
				],
				'tzName' => [
					'required' => true,
				],
			],
		],
	],
];
