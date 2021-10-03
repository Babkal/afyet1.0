<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->timestamps();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
