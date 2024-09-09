<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicant_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name_of_business');
            $table->string('name_of_product');
            $table->string('country_of_registration');
            $table->string('country_of_operation');
            $table->string('founder_name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('description');
            $table->string('target_sector');
            $table->string('impact_on_msme');
            $table->string('time_in_operation');
            $table->integer('total_revenue');
            $table->string('mrr');
            $table->string('team_size');
            $table->string('video_pitch');
            $table->string('pitch_deck');
            $table->string('solution_url');
            $table->string('participation_reason');
            $table->string('hear_about_techmybiz');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_forms');
    }
};
