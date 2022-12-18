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
        Schema::create('developer_social_network', function (Blueprint $table) {
            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->unsignedBigInteger('social_network_id');
            $table->foreign('social_network_id')->references('id')->on('social_networks');
            $table->string('link');
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
        Schema::dropIfExists('developer_social_network');
    }
};
