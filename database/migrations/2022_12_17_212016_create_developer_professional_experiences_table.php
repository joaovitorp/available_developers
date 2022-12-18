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
        Schema::create('developer_professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->string('company_name');
            $table->string('role');
            $table->string('description')->nullable();
            $table->boolean('is_still_working_at_it')->default(false);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developer_professional_experiences');
    }
};
