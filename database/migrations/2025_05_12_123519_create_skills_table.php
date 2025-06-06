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
    Schema::create('skills', function (Blueprint $table) {
      $table->id();
      $table->foreignId('profile_id')->constrained()->onDelete("cascade");
      $table->string('title');
      $table->integer('value');
      $table->string('color');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('skills');
  }
};
