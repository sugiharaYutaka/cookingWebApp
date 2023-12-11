<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_followers', function (Blueprint $table) {
            $table->id();

            $table->string('follower_email')->unique()->nullable(false);
            $table->foreign('follower_email')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');

            $table->string('following_email')->unique()->nullable(false);
            $table->foreign('following_email')
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
        Schema::dropIfExists('sns_followers');
    }
}
