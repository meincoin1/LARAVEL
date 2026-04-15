<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->comment('User email address')->change();
        });
    }

    public function down(): void
    {
        // Убираем комментарий при откате
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->comment('')->change();
        });
    }
};