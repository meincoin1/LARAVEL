<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class ChangePostsTable extends Migration
{
    public function up()
	{
		Schema::table('startonemigrate', function (Blueprint $table) {
			$table->string('title', 100)->change();
			$table->text('desc');
		});
	}
}

