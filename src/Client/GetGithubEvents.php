<?php
namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Evangelist;

class GetGithubEvents extends Evangelist
{
    /*
    | getGithubEvents fetch current events on Github
    | Accepts no parameter
    | @retrun array of objects
    */
    public function getGithubEvents()
    {
        $url = "https://api.github.com/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserRepoEvent fetch current events on a Github user repo
    | Accepts two parameters @github_username and @github_repo
    | @retrun array of objects
    */
    public function getGithubUserRepoEvent( $github_username, $github_repo )
    {
        $url = "https://api.github.com/repos/$github_username/$github_repo/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserRepoIssues fetch issues on a Github user repo
    | Accepts two parameters @github_username and @github_repo
    | @retrun array of objects
    */
    public function getGithubUserRepoIssues( $github_username, $github_repo)
    {
        $url = "https://api.github.com/repos/$github_username/$github_repo/issues/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserNetworkEventsIssues fetch network issues on user Github repo
    | Accepts two parameters @github_username and @github_repo
    | @retrun array of objects
    */
    public function getGithubUserNetworkEventsIssues( $github_username, $github_repo)
    {
        $url = "https://api.github.com/repos/$github_username/$github_repo/issues/events";
        return $this->processData( $url );
    }

    /*
    | getGithubOrgEvents fetch org events on Github
    | Accepts one parameter @org
    | @retrun array of objects
    */
    public function getGithubOrgEvents( $org )
    {
        $url = "https://api.github.com/orgs/$org/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastEvent fetch user last event on Github
    | Accepts one parameter @github_username
    | @retrun array of objects
    */
    public function getGithubUserLastEvent( $github_username )
    {
        $url = "https://api.github.com/users/$github_username/received_events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastReceivedEvent fetch user last event Received on Github
    | Accepts one parameter @github_username
    | @retrun array of objects
    */
    public function getGithubUserLastReceivedEvent( $github_username )
    {
        $url = "https://api.github.com/users/$github_username/received_events/public";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastEventPerformed fetch user last performed event on Github
    | Accepts one parameter @github_username
    | @retrun array of objects
    */
    public function getGithubUserLastEventPerformed( $github_username )
    {
        $url = "https://api.github.com/users/$github_username/events";
        return $this->processData( $url );
    }

    /*
    | getGithubUserLastPublicEventPerformed fetch user last public event on Github
    | Accepts one parameter @github_username
    | @retrun array of objects
    */
    public function getGithubUserLastPublicEventPerformed( $github_username )
    {
        $url = "https://api.github.com/users/$github_username/events/public";
        return $this->processData( $url );
    }

    /*
    | getGithubUserOrgLastEvent fetch user org last event on Github
    | Accepts one parameter @github_username
    | @retrun array of objects
    */
    public function getGithubUserOrgLastEvent( $github_username, $org )
    {
        $url = "https://api.github.com/users/$github_username/events/orgs/$org";
        return $this->processData( $url );
    }

}
