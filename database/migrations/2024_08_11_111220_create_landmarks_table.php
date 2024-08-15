<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandmarksTable extends Migration
{
    public function up()
    {
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->string('landmarkName');
            $table->string('image');
            $table->text('description');
            $table->json('activities'); 
            $table->json('tripOptions'); 
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('landmarks');
    }
}