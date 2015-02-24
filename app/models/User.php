<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'confirmation', 'remember_token');

	public function threads(){
		return $this->hasMany('Thread');
	}

	public function answers(){
		return $this->hasMany('Answer');
	}

	public function notifications(){
		return $this->hasMany('Notification', 'user_id');
	}
}
