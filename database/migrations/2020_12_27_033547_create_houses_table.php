<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('slug');
            $table->string('status');
    
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->unsignedBigInteger('price_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
         
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');

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
        Schema::dropIfExists('houses');
    }
}
