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
        Schema::create('single_message_reacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('single_message_id')->constrained('single_messages');
            $table->foreignId('user_id')->constrained('users');
            $table->string('react');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_message_reacts');
    }
};
