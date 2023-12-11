<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_profiles', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->foreign('email')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');

            $table->unsignedInteger('history');
            $table->string('text');
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
        Schema::dropIfExists('sns_profiles');
    }
}
