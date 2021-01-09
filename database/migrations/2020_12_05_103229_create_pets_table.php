<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nickname');
            $table->string('species');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index('user_id');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
