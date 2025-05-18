<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hati-hati: Ini mengasumsikan data dalam img_url valid JSON
        DB::statement('ALTER TABLE portfolios ALTER COLUMN img_url TYPE json USING img_url::json');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE portfolios ALTER COLUMN img_url TYPE text USING img_url::text');
    }
};
