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
        $this->github_org              = $this->github_org();
        $this->github_repo              = $this->github_repo();
        $this->github_username          = $this->github_username();
        $this->github_password          = $this->github_password();
        $this->github_client_id         = $this->github_client_id();
        $this->github_client_secret     = $this->github_client_secret();
    }

    protected function getAccess()
    {
        $dotenv = new Dotenv(__DIR__ . "/../" );
        return $dotenv->load();
    }

    public function github_username()
    {
        $this->getAccess();
        return getenv('github_username');
    }

    public function github_password()
    {
        $this->getAccess();
        return getenv('github_password');
    }

    public function github_client_id()
    {
        $this->getAccess();
        return getenv('client_id');
    }

    public function github_client_secret()
    {
        $this->getAccess();
        return getenv('client_secret');
    }

    public function github_repo()
    {
        $this->getAccess();
        return getenv('github_repo');
    }

    public function github_org()
    {
        $this->getAccess();
        return getenv('github_org');
    }


}

?>





