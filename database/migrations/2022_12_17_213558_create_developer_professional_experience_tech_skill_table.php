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
        Schema::create('developer_professional_experience_tech_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_professional_experience_id');
            $table->foreign(['developer_professional_experience_id'], 'dpets_developer_professional_experience_id_foreign')
                ->references('id')
                ->on('developer_professional_experiences');

            $table->unsignedBigInteger('tech_skill_id');
            $table->foreign(['tech_skill_id'], 'dpets_tech_skill_id_foreign')
                ->references('id')
                ->on('tech_skills');
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
        Schema::dropIfExists('developer_professional_experience_tech_skill');
    }
};
