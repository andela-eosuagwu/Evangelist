<?php

namespace Emeka\Evangelist;

use guzzle\guzzle;

class Evangelist
{

    protected $url                 = "https://api.github.com/users/";

    protected $github_password;

    protected $github_username;

    public $httpOpt;

    protected $getEvangeInfo;

    public function __construct ( $github_username, $github_password )
    {
        $this->github_username      = $github_username;
        $this->github_password      = $github_password;
        $this->getEvangeInfo        = $this->getEvangeInfo();
        $this->httpOpt              = $this->httpOpt();
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


    public function getEvangeInfo()
    {
        $url = $this->url . $this->github_username;
        $response = file_get_contents($url, true, $this->httpOpt());
        return json_decode($response);
    }





}














?>





