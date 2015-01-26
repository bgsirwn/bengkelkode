<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('type');
			$table->string('title', 100);
			$table->longtext('thread');
			$table->text('tag');
			$table->integer('answered');
			$table->text('votes');
			$table->integer('view');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('threads');
	}

}
