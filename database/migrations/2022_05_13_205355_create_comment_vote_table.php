<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_vote', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vote_id');
            $table->unsignedBigInteger('comment_id');
            $table->timestamps();

            $table->foreign('vote_id')->references('id')->on('votes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('comment_id')->references('id')->on('comments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unique(['vote_id', 'comment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_vote');
    }
}
