<?php

use App\Models\Travel;
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
        Schema::create('travel', function (Blueprint $table) {
            $table->foreignId('flight_id')->references('flight_id')->on('flights');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('evaluation')->default('');
            $table->timestamps();
            $table->primary(['flight_id', 'user_id']);
        });

        Travel::create(['flight_id'=>1, 'user_id'=>1, 'evaluation'=>'Good']);
        Travel::create(['flight_id'=>1, 'user_id'=>2, 'evaluation'=>'Good']);
        Travel::create(['flight_id'=>1, 'user_id'=>3]);
        Travel::create(['flight_id'=>1, 'user_id'=>4]);
        Travel::create(['flight_id'=>2, 'user_id'=>1]);
        Travel::create(['flight_id'=>2, 'user_id'=>2, 'evaluation'=>'Very bad service']);
        Travel::create(['flight_id'=>3, 'user_id'=>2, 'evaluation'=>'...']);
        Travel::create(['flight_id'=>4, 'user_id'=>3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel');
    }
};
