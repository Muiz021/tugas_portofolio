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
        Schema::create('biografi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biografi_id');
            $table->foreign('biografi_id')->references('id')->on('portofolio');
            $table->string('biografi')->nullable();
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
        Schema::dropIfExists('biografi');
    }
};
