<?php

namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Setup;
use Emeka\Evangelist\Evangelist;

class GetGithubEvents extends Evangelist
{

    protected $github_repo;
    protected $github_username;
    protected $github_org_link;
    protected $github_repo_link;
    protected $github_user_link;

    public function __construct ()
    {
        $access = new Setup;
        $this->github_org           = $access->getGithubOrg();
        $this->github_repo          = $access->getGithubRepo();
        $this->github_username      = $access->getGithubUsername();
        $this->github_org_link      = "https://api.github.com/repos";
        $this->github_user_link     = "https://api.github.com/users";
        $this->github_repo_link     = "https://api.github.com/repos";
    }

    /*
    | getGithubEvents fetch current events on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getGithubEvents()
    {
        $url = "https://api.github.com/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserRepoEvent fetch current events on a Github user repo
    | Accepts two parameters @github_username and @github_repo
    | @return array of objects
    */
    public function getGithubUserRepoEvent( )
    {
        $url = $this->github_repo_link . "/$this->github_username/$this->github_repo/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserRepoIssues fetch issues on a Github user repo
    | Accepts two parameters @github_username and @github_repo
    | @return array of objects
    */
    public function getGithubUserRepoIssues()
    {
        $url = $this->github_repo_link . "/$this->github_username/$this->github_repo/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserNetworkEventsIssues fetch network issues on user Github repo
    | Accepts two parameters @github_username and @github_repo
    | @return array of objects
    */
    public function getGithubUserNetworkEventsIssues()
    {
        $url =  $this->github_repo_link . "/$this->github_username/$this->github_repo/issues/events";
        return $this->processData( $url );
    }

    /*
    | getGithubOrgEvents fetch org events on Github
    | Accepts one parameter @org
    | @return array of objects
    */
    public function getGithubOrgEvents()
    {
        $url = $this->github_org_link . "/$this->github_org/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastEvent fetch user last event on Github
    | Accepts one parameter @github_username
    | @return array of objects
    */
    public function getGithubUserLastEvent()
    {
        $url = $this->github_user_link . "/$this->github_username/received_events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastReceivedEvent fetch user last event Received on Github
    | Accepts one parameter @github_username
    | @return array of objects
    */
    public function getGithubUserLastReceivedEvent()
    {
        $url = $this->github_user_link . "/$this->github_username/received_events/public";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastEventPerformed fetch user last performed event on Github
    | Accepts one parameter @github_username
    | @return array of objects
    */
    public function getGithubUserLastEventPerformed()
    {
        $url = $this->github_user_link . "/$this->github_username/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastPublicEventPerformed fetch user last public event on Github
    | Accepts one parameter @github_username
    | @return array of objects
    */
    public function getGithubUserLastPublicEventPerformed()
    {
        $url = $this->github_user_link . "/$this->github_username/events/public";
        return $this->processData( $url );
    }

    /*
    | getGithubUserOrgLastEvent fetch user org last event on Github
    | Accepts one parameter @github_username
    | @return array of objects
    */
    public function getGithubUserOrgLastEvent()
    {
        $url = $this->github_user_link . "/$this->github_username/events/orgs/$this->github_org";
        return $this->processData( $url );

    }

}
