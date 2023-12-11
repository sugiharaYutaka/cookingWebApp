<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_replies', function (Blueprint $table) {
            $table->id('id');
            $table->foreign('id')
            ->references('id')
            ->on('sns_posts')
            ->onDelete('cascade');

            $table->string('email')->unique()->nullable(false);
            $table->foreign('email')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');

            $table->string('text')->nullable(false);
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
        Schema::dropIfExists('sns_replies');
    }
}
