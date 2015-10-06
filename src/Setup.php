<?php

namespace Emeka\Evangelist;

use Dotenv\Dotenv;

class Setup
{
    public $github_org;
    public $github_repo;
    public $github_username;
    public $github_password;
    public $github_client_id;
    public $github_client_secret;


    public function __construct ()
    {
        $dotenv = new Dotenv(__DIR__ . "/../" );
        $dotenv->load();
        $this->github_username          = getenv('github_username');
        $this->github_repo              = getenv('github_repo');
        $this->github_password          = getenv('github_password');
        $this->github_client_id         = getenv('client_id');
        $this->github_client_secret     = getenv('client_secret');
    }

    protected function github_username()
    {
        return $this->github_username;
    }

    protected function github_password()
    {
        return $this->github_password;
    }

    protected function github_repo()
    {
        return $this->github_repo;
    }

    protected function github_client_id()
    {
        return $this->github_client_id;
    }

    protected function github_client_secret()
    {
        return $this->github_client_secret;
    }

}






