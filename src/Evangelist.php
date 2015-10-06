<?php

namespace Emeka\Evangelist;

use  Emeka\Evangelist\Exception\LowRepoNumberException;

class Evangelist
{
    protected $github_client_id;
    protected $github_client_secret;

    public function __construct ()
    {
        $access = new Setup;
        $this->github_client_id     = $access->github_client_id;
        $this->github_client_secret = $access->github_client_secret;
    }

    /*
    | processUserInfo process user info for GetUser class
    */
    protected static function processData( $url )
    {
            $gitfetch = curl_init();
            curl_setopt($gitfetch, CURLOPT_URL, $url);
            curl_setopt($gitfetch, CURLOPT_USERAGENT,  $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($gitfetch, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($gitfetch);
            curl_error($gitfetch);
            curl_close($gitfetch);
            return $data;
    }

    public function getUserInfo( $git_username )
    {
        $url = "https://api.github.com/users/" . $git_username . "?" . $this->github_client_id . "&" . $this->github_client_secret ;
        return $this->processData( $url );
    }

    // public function getUserStatus( $git_username )
    // {
    //         $url = "https://api.github.com/users/". $git_username . "?" . $this->github_client_id . "&" . $this->github_client_secret;
    //         return $this->processData( $url );
    // }

}

?>





