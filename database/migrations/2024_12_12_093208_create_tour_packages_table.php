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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->foreignUuid('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('duration_days');
            $table->integer('duration_hours');
            $table->string('location');
            $table->string('thumbnail');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
