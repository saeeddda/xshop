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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('slug',128)->unique();
            $table->text('subtitle')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort')->default(0);
            $table->string('image',2048)->nullable()->default(null);
            $table->string('svg',2048)->nullable()->default(null);
            $table->string('bg',2048)->nullable()->default(null);
            $table->unsignedInteger('parent_id')->nullable()->default(null)->index();
            $table->json('theme')->nullable();
            $table->text('canonical')->nullable();
            $table->boolean('hide')->default(true)->comment('hide in menu as sub category');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
