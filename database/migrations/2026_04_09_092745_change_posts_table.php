<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePostsTable extends Migration
{

    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('text')->nullable();
	});
    }

};
