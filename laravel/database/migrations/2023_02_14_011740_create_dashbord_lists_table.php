<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashbord_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('number') -> unsigned();
            $table->string('type_avto');
            $table->string('seson_year');
            $table->time('data');
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
        Schema::dropIfExists('dashbord_lists');
    }
};
