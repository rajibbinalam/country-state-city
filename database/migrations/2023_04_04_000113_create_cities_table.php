<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('CountryStateCity.migrations.cities.table_name'), function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            foreach (config('CountryStateCity.migrations.cities.optional_fields') as $field => $value) {
                if($value['required']){
                    $table->string($field, $value['length'] ?? null)->nullable();
                }
            }
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('CountryStateCity.migrations.cities.table_name'));
    }
}
