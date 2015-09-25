<?php

namespace Emeka\Evangelist;


class Evangelist
{

    private $url                 = "https://api.github.com/users/";
    private $repo;
    private $github_password;
    private $github_username;
    private $response;

    public function __construct ( $github_username, $github_password )
    {
        $this->github_username      = $github_username;
        $this->github_password      = $github_password;
    }

    public function httpOpt()
    {
        $opts =
        [
            'http' =>
                [
                'method' =>   "GET",
                'user_agent'  =>    $_SERVER['HTTP_USER_AGENT']
                ]
        ];

        $context  = stream_context_create($opts);
        return $context;
    }

    public function getEvangelistInfo()
    {
        $url = $this->url . $this->github_username;
        $this->response = file_get_contents($url, true, $this->httpOpt());
        return json_decode($this->response);
    }



}














?>