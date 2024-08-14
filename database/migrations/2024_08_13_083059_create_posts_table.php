<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->unsignedInteger('landmark_id');
          //  $table->foreignId('landmark_id')->constrained()->onDelete('cascade');
           $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
