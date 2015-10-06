<?php

use Dotenv\Dotenv;

class Env
{
    private $github_url;

    function __construct()
    {
        $dotenv = new Dotenv(__DIR__ . "/../" );
        $dotenv->load();
        $this->github_url = getenv('github_username');
    }

    public function caing ()
    {
        return $this->github_url;
    }

}