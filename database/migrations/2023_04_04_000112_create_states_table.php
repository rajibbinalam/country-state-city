<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('CountryStateCity.migrations.states.table_name'), function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('country_id');
            foreach (config('CountryStateCity.migrations.states.optional_fields') as $field => $value) {
                if($value['required']){
                    $table->string($field, $value['length'] ?? null)->nullable();
                }
            }
            $table->timestamps();

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
        Schema::dropIfExists(config('CountryStateCity.migrations.states.table_name'));
    }
}
