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

    public function getGithubUsername()
    {
        return $this->github_username;
    }

    public function getGithubPassword()
    {
        return $this->github_password;
    }

    public function getGithubRepo()
    {
        return $this->github_repo;
    }

    public function getGithubClientId()
    {
        return $this->github_client_id;
    }

    public function getGithubClientSecret()
    {
        return $this->github_client_secret;
    }

}






