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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->longText('favicon')->nullable()->default(null);
            $table->longText('logo')->nullable()->default(null);
            $table->longText('title')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->longText('phone')->nullable()->default(null);
            $table->longText('email')->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->longText('about')->nullable()->default(null);
            $table->string('total_teacher')->nullable()->default(0);
            $table->string('total_student')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
