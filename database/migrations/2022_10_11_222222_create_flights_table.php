<?php

use App\Models\Flight;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('flight_id');
            $table->date('date');
            $table->foreignId('airline_id')->references('airline_id')->on('airlines');
            $table->integer('limit');
            $table->timestamps();
        });

        Flight::create(['date'=>'2022-05-12', 'airline_id'=>1, 'limit'=>150]);
        Flight::create(['date'=>'2022-11-05', 'airline_id'=>1, 'limit'=>150]);
        Flight::create(['date'=>'2021-10-15', 'airline_id'=>2, 'limit'=>500]);
        Flight::create(['date'=>'2021-09-25', 'airline_id'=>3, 'limit'=>100]);
        Flight::create(['date'=>'2022-02-06', 'airline_id'=>4, 'limit'=>100]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
