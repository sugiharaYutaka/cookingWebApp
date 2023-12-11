<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->index('id');

            $table->string('dish_name')->nullable(false);
            $table->unsignedInteger('level')->nullable(false);

            $table->string('email')->unique()->nullable(false);
            $table->foreign('email')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');

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
        Schema::dropIfExists('recipes');
    }
}
