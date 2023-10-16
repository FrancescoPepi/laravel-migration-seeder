<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('number_wagons_all_out')->unsigned();
            $table->tinyInteger('number_wagon')->unsigned();
            $table->tinyInteger('plans')->unsigned();
            $table->enum('type', ['economy', 'premium', 'diamond']);
            $table->string('from_city', 50);
            $table->string('to_city', 50);
            $table->boolean('restaurant')->nullable()->default(0);
            $table->text('description');
            $table->float('price', 5, 2);
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
        Schema::dropIfExists('trains');
    }
};