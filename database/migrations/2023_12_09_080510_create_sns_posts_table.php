<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('text')->nullable(false);
            $table->string('image_filename');
            $table->unsignedBigInteger('good')->default(0);

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
        Schema::dropIfExists('sns_posts');
    }
}
