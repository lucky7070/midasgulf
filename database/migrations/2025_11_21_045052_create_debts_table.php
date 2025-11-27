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
        Schema::create('debts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('slug');
            $table->integer('type');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('country_code', 10);
            $table->string('phone', 50);

            $table->json('creditor')->nullable();
            $table->boolean('active_criminal_case')->default(false);
            $table->boolean('active_civil_case')->default(false);
            $table->boolean('currently_in_country')->default(false);
            $table->boolean('valid_passport')->default(false);
            $table->boolean('valid_emirates_id')->default(false);

            $table->text('criminal_case_description')->nullable();
            $table->text('civil_case_description')->nullable();

            $table->string('client_status');
            $table->string('timelineRequirement');
            $table->string('settlement_upload_emirates_front')->nullable();
            $table->string('settlement_upload_emirates_back')->nullable();
            $table->string('settlement_upload_passport')->nullable();
            $table->string('settlement_upload_license')->nullable();
            $table->string('settlement_upload_ejari')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};
