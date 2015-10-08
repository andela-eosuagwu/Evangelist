<?php

namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Setup;
use Emeka\Evangelist\Evangelist;

class GetStatus extends Evangelist
{
    protected $github_username;

    public function __construct ()
    {
        $access = new Setup;
        $this->github_username = $access->githubUsername();
    }

    /*
    | statusLogic runs logic base on the user status
    | Accepts one parameter
    | @return string
    */
    public function statusLogic( $status )
    {
        if ( $status >= 5 && $status <= 10 )
        {
            return "Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist";
        }

        if ( $status >= 11 && $status <= 20 )
        {
            return "Keep Up The Good Work, I crown you Associate Evangelist";
        }

        if ( $status >= 21 )
        {
            return "Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place";
        }
    }

    /*
    | getStatus user status
    | Accepts no parameter
    | @return string
    */
    public function getStatus()
    {
        $status =  json_decode($this->getUserInfo($this->github_username), true)['id'];
        return $this->statusLogic($status);
    }


}
