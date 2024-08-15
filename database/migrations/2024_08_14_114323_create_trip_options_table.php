<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('trip_options', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('details'); // Assuming this is a JSON column
            $table->text('description'); // Ensure this column exists
            $table->foreignId('landmark_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_options');
    }
}
