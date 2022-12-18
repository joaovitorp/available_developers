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
        Schema::create('tech_skill_tech_skill_type', function (Blueprint $table) {
            $table->unsignedBigInteger('tech_skill_id');
            $table->foreign('tech_skill_id')->references('id')->on('tech_skills');
            $table->unsignedBigInteger('tech_skill_type_id');
            $table->foreign('tech_skill_type_id')->references('id')->on('tech_skill_types');
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
        Schema::dropIfExists('tech_skill_tech_skill_type');
    }
};
