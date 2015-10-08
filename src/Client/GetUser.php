<?php

namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Setup;
use Emeka\Evangelist\Evangelist;

class GetUser extends Evangelist
{
    protected $github_username;

    public function __construct ()
    {
        $access = new Setup;
        $this->github_username = $access->getGithubUsername();
    }

    /*
    | getGithubUserInfoAsJson get user info on Github
    | Accepts no parameter
    | @return json response
    */
    public function getGithubUserInfoAsJson()
    {
        return $this->getUserInfo($this->github_username);
    }

    /*
    | getGithubUserAsArray get Array of Github user info
    | Accepts no parameter
    | @return array of objects
    */
    public function getGithubUserInfoAsArray()
    {
        $data =  $this->getGithubUserInfoAsJson();
        return json_decode($data, true);
    }

    /*
    | getId get user id on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getId()
    {
        return $this->getGithubUserInfoAsArray()['id'];
    }

    /*
    | getLogin get user login on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLogin()
    {
        return $this->getGithubUserInfoAsArray()['login'];
    }

    /*
    | getName get user name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getName()
    {
        return $this->getGithubUserInfoAsArray()['name'];
    }

    /*
    | getAvatar get Avatar name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getAvatar()
    {
        return $this->getGithubUserInfoAsArray()['avatar_url'];
    }

    /*
    | getUrl get url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUrl()
    {
        return $this->getGithubUserInfoAsArray()['url'];
    }

    /*
    | getHtmlUrl get html_url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getHtmlUrl()
    {
        return $this->getGithubUserInfoAsArray()['html_url'];
    }

    /*
    | getType get type name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getType()
    {
        return $this->getGithubUserInfoAsArray()['type'];
    }

    /*
    | getCompany get company name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCompany()
    {
        return $this->getGithubUserInfoAsArray()['company'];
    }

    /*
    | getLocation get location on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLocation()
    {
        return $this->getGithubUserInfoAsArray()['location'];
    }

    /*
    | getEmail get email on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getEmail()
    {
        return $this->getGithubUserInfoAsArray()['email'];
    }

    /*
    | getFollowing get number of following on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowing()
    {
        return $this->getGithubUserInfoAsArray()['following'];
    }

    /*
    | getFollowers get number of followers on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowers()
    {
        return $this->getGithubUserInfoAsArray()['followers'];
    }

    /*
    | getCreatedAt get createdAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCreatedAt()
    {
        return $this->getGithubUserInfoAsArray()['created_at'];
    }

    /*
    | getUpdatedAt get UpdatedAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUpdatedAt()
    {
        return $this->getGithubUserInfoAsArray()['updated_at'];
    }

}
