<?php namespace TGL\Auth\Handlers;

use TGL\Auth\Commands\UserRegisterCommand;
use TGL\Auth\Events\UserWasRegistered;
use TGL\Users\Entities\User;
use TGL\Users\Repositories\UserRepository;

class UserRegisterCommandHandler
{
    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function handle(UserRegisterCommand $command)
    {
        $user =  User::register($command->username, $command->slug, $command->first_name, $command->last_name, $command->email, $command->password);

        $persisted_user = $this->userRepo->persist($user);

        event(new UserWasRegistered($persisted_user));
    }
}