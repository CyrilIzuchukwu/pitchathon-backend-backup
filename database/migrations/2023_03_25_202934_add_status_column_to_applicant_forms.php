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
        Schema::table('applicant_forms', function (Blueprint $table) {
            $table->enum('status', ['applied', 'approved', 'declined'])->default('applied')->after('otherOption');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicant_forms', function (Blueprint $table) {
            //
        });
    }
};
