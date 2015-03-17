<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up(){
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 20)->unique();
			$table->string('email', 120)->unique();
			$table->string('password', 200);
			$table->string('name', 40);
			$table->string('bio', 300);
			$table->string('photo', 200);
			$table->text('followers');
			$table->text('following');
			$table->string('confirmation',300);
			$table->integer('confirmed');
			$table->integer('point');
			$table->rememberToken();
			$table->timestamps();
		});
	}
	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down(){
		Schema::dropIfExists('users');
	}
}