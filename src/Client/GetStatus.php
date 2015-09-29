<?php

namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Evangelist;

class GetStatus extends Evangelist
{

    protected $github_username;

    public function __construct ($github_username)
    {
        $this->github_username = $github_username;
    }

    /*
    | statusLogic runs logic base on the user status
    | Accepts one parameter
    | @return string
    */
    public function statusLogic( $status )
    {
        if ( $status <= 5 )
        {
            return $this->github_username . " Please work harder, we need the world to be a better place";
        }
        elseif ( $status >= 20 )
        {
            return $this->github_username . ' Keep Up The Good Work, I crown you Associate Evangelist';
        }
        elseif ( $status >= 30 )
        {
            return 'Wow ' . $this->github_username . ' I crown you Most Senior Evangelist. Thanks for making the world a better place';
        }
        else
        {
            return "Damn It!!! " . $this->github_username . " Please make the world better, Oh Ye Prodigal Evangelist";
        }
    }

    /*
    | getStatus user status
    | Accepts no parameter
    | @return string
    */
    public function getStatus()
    {
        $data =  $this->processUserInfo($this->github_username);
        $status =  json_decode($data, true);
        $status = $status['id'];
        return $this->statusLogic($status);
    }


}
