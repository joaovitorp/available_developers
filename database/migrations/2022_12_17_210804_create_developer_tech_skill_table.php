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
        Schema::create('developer_tech_skill', function (Blueprint $table) {
            $table->id();
            $table->integer('commercial_experience_in_months')->nullable();
            $table->integer('experience_in_months')->nullable();
            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->unsignedBigInteger('tech_skill_id');
            $table->foreign('tech_skill_id')->references('id')->on('tech_skills');
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
        Schema::dropIfExists('developer_tech_skill');
    }
};
