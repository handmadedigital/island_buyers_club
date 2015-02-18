<?php namespace TGL\Auth\Decorators;

use TGL\Tools\Slugger\Slugger;
use TGL\Users\Entities\User;
use TGL\Users\Repositories\UserRepository;

class UsernameSlugGeneratorDecorator
{
    use Slugger;

    public function handle($command)
    {
        $command->slug = $this->sluggifyUnique($command->username, new UserRepository(new User));

        return $command;
    }
}