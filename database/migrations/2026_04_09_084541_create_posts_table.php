<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{  
    public function up(): void
    {
        Schema::create('startonemigrate', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->integer('votes');
            $table->string('name');
            $table->string('name', 100);
            $table->text('text');
            $table->date('created_at');
            $table->dateTime('created_at');
            $table->timestamp('added_on');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};



