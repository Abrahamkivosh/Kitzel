<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToursMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tour_title');
            $table->string('tour_location');
            $table->string('starting_point');
            $table->string('ending_point');

            $table->mediumText('featured')->nullable()->after('tour_duration');
            $table->mediumText('tour_excerpt')->nullable()->after('ending_point');

            $table->longText('tour_description')->nullable();
            $table->longText('tour_Itinerary')->nullable();
            $table->longText('additional_infoS')->nullable();
            $table->string('tour_duration');
            $table->integer('price');
            $table->double('discount', 5, 2)->nullable()->default(0);;
            $table->integer('capacity')->default(16);
            $table->enum('status', ['pending', 'running', 'finished', 'canceled'])->default('pending');
            $table->unsignedInteger('guide_id')->nullable();
            $table->unsignedInteger('category_id');
            // $table->foreignId("category_id")->constrained('categories') ;

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
        Schema::dropIfExists('tours');
    }
}
