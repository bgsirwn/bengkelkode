<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('thread_id')->unsigned();
			$table->text('votes');
			$table->integer('votes_count');
			$table->text('answer');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('thread_id')->references('id')->on('threads');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('answers');
	}

}
