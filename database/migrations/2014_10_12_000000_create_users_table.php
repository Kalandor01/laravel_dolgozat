<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Bob', 'email'=>'bob@dbair.com']);
        User::create(['name'=>'Nagy Zsuzsi', 'email'=>'zsuzsib@dbair.com']);
        User::create(['name'=>'Kis Tamás', 'email'=>'tamas@dbair.com']);
        User::create(['name'=>'Kovács Kata', 'email'=>'kata@dbair.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
