<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // CEK dulu apakah kolom sudah ada
        if (!Schema::hasColumn('users', 'profile_picture')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('profile_picture')->nullable()->after('password');
            });
        }
    }

    public function down(): void
    {
        // CEK dulu apakah kolom ada sebelum drop
        if (Schema::hasColumn('users', 'profile_picture')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('profile_picture');
            });
        }
    }
};
