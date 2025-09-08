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
        Schema::create('personalizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('broker_id')->unique()->constrained()->onDelete('cascade');
            $table->text('section_2_line_1')->nullable();
            $table->text('section_2_line_2')->nullable();
            $table->text('section_2_paragraph_3')->nullable();
            $table->text('section_2_button_link')->nullable();
            $table->text('section_4_button_link')->nullable();
            $table->text('section_5_button_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizations');
    }
};
