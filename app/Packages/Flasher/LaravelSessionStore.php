<?php namespace TGL\Packages\Flasher;

use Illuminate\Session\Store;
use TGL\Packages\Flasher\Contracts\SessionStore;

class LaravelSessionStore implements SessionStore
{
    /**
     * @var Store
     */
    private $session;
    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }
    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }

}