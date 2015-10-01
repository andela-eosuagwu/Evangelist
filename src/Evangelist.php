<?php

namespace Emeka\Evangelist;

class Evangelist
{

    protected $url = "https://api.github.com/";

    /*
    | processUserInfo process user info for GetUser class
    */
    protected static function processData( $url )
    {
        $gitfetch = curl_init();
         curl_setopt($gitfetch, CURLOPT_URL, $url);
        curl_setopt($gitfetch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201");
        curl_setopt($gitfetch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($gitfetch);
        curl_error($gitfetch);
        curl_close($gitfetch);
        return $data;
    }

    public function getUserInfo( $git_username )
    {
        $url = "https://api.github.com/users/$git_username?client_id=513ce061270c479165f3&client_secret=0e8fdd973d153045631b0710db2a0339c3d0d90d";
        return $this->processData( $url );
    }

    public function getUserStatus( $git_username )
    {
        $url = "https://api.github.com/users/$git_username?client_id=513ce061270c479165f3&client_secret=0e8fdd973d153045631b0710db2a0339c3d0d90d";
        return $this->processData( $url );
    }

}

?>





