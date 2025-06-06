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
    Schema::create('experiences', function (Blueprint $table) {
      $table->id();
      $table->foreignId('profile_id')->constrained()->onDelete("cascade");
      $table->string("position");
      $table->string("company_name");
      $table->date("start_at");
      $table->date("finish_at")->nullable();
      $table->text("description");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('experiences');
  }
};
