<?php

use App\Models\Airline;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id('airline_id');
            $table->string('name', 30);
            $table->string('country', 30);
            $table->timestamps();
        });

        Airline::create(['name'=>'DBAir', 'country'=>'Hungary']);
        Airline::create(['name'=>'DBAir', 'country'=>'England']);
        Airline::create(['name'=>'DBAir', 'country'=>'USA']);
        Airline::create(['name'=>'Lalaair', 'country'=>'Canada']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airlines');
    }
};
