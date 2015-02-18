<?php namespace TGL\Users\Repositories;

use Illuminate\Support\Facades\Hash;
use TGL\Core\Repositories\EloquentRepository;
use TGL\Users\Entities\User;

class UserRepository extends EloquentRepository
{
    /**
     * @var User
     */
    protected $model;

    /**
     * @param User $model
     */
    function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Save a new user to the database
     *
     * @param $user
     */
    public function persist($user)
    {
        $this->model->username = $user->username;
        $this->model->slug = $user->slug;
        $this->model->first_name = $user->first_name;
        $this->model->last_name = $user->last_name;
        $this->model->email = $user->email;
        $this->model->password = Hash::make($user->password);

        $this->model->save();

        return $this->model;
    }
}