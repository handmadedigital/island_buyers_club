<?php namespace TGL\Shop\Container\Handlers;

use TGL\Shop\Container\Commands\AddToContainerCommand;
use TGL\Shop\Container\Entities\Container;
use TGL\Shop\Container\Repositories\ContainerRepository;

class AddToContainerCommandHandler
{

    /**
     * @var ContainerRepository
     */
    protected $containerRepo;

    function __construct(ContainerRepository $containerRepo)
    {
        $this->containerRepo = $containerRepo;
    }

    public function handle(AddToContainerCommand $command)
    {
        $container = Container::add($command->variant_id, $command->quantity);

        $this->containerRepo->persist($container);
    }
}