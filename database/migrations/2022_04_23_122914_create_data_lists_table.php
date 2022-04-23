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
        Schema::create('data_lists', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('manufacture by');
            $table->String('manufacture date');
            $table->String('expiry date');
            $table->String('price');
            $table->String('weight');
            $table->String('product id');
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
        Schema::dropIfExists('data_lists');
    }
};
