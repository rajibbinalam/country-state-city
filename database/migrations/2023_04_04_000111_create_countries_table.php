<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('CountryStateCity.migrations.countries.table_name'), function (Blueprint $table) {
            $table->id();
            $table->string('name');
            foreach (config('CountryStateCity.migrations.countries.optional_fields') as $field => $value) {
                if($value['required']){
                    $table->string($field, $value['length'] ?? null)->nullable();
                }
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('CountryStateCity.migrations.countries.table_name'));
    }
}
