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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('username')->nullable();
            $table->text('name')->nullable();
            $table->text('role')->nullable();
            $table->text('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password_hash')->nullable();
            $table->timestamp('registered_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
