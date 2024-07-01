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
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
            $table->boolean('is_support')->default(0)->after('features');
            $table->text('support')->nullable()->after('is_support');
            $table->mediumText('warranty')->nullable()->after('support');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['slug', 'is_support', 'support', 'warranty']);
        });
    }
};
