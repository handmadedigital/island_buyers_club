<?php namespace TGL\Users\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'slug', 'first_name', 'last_name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token', 'slug'];





	/********************************************/
	/*
	 * COMMAND FUNCTIONS
	 */
	/********************************************/

	/**
	 * Register a new user
	 *
	 * @param $username
	 * @param $slug
	 * @param $first_name
	 * @param $last_name
	 * @param $email
	 * @param $password
	 * @return static
	 */
	public static function register($username, $slug, $first_name, $last_name, $email, $password)
	{
		return new static(compact('username', 'slug', 'first_name', 'last_name', 'email', 'password'));
	}


	/********************************************/
	/*
	 * RELATIONSHIP FUNCTIONS
	 */
	/********************************************/

	public function detail()
	{
		return $this->hasOne('TGL\Users\Entities\UserDetail');
	}

	public function comments()
	{
		return $this->morphMany('TGL\Comments\Comment', 'commentable');
	}

}
