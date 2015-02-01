<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('user_sender');
			$table->text('user_involved');
			/* type notifikasi
			1. thread dijawab 
			2. vote thread  
			3. vote answer 
			4. user difollow */
			$table->integer('type');
			$table->integer('effected');
			$table->integer('seen');
			$table->integer('clicked');
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
		Schema::drop('notifications');
	}

}
