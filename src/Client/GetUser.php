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
        $this->github_username = $access->github_username;
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
    public function getGithubUserAsArray()
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
        return $this->getGithubUserAsArray()['id'];
    }

    /*
    | getLogin get user login on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLogin()
    {
        return $this->getGithubUserAsArray()['login'];
    }

    /*
    | getName get user name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getName()
    {
        return $this->getGithubUserAsArray()['name'];
    }

    /*
    | getAvatar get Avatar name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getAvatar()
    {
        return $this->getGithubUserAsArray()['avatar_url'];
    }

    /*
    | getUrl get url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUrl()
    {
        return $this->getGithubUserAsArray()['url'];
    }

    /*
    | getHtmlUrl get html_url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getHtmlUrl()
    {
        return $this->getGithubUserAsArray()['html_url'];
    }

    /*
    | getType get type name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getType()
    {
        return $this->getGithubUserAsArray()['type'];
    }

    /*
    | getCompany get company name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCompany()
    {
        return $this->getGithubUserAsArray()['company'];
    }

    /*
    | getLocation get location on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLocation()
    {
        return $this->getGithubUserAsArray()['location'];
    }

    /*
    | getEmail get email on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getEmail()
    {
        return $this->getGithubUserAsArray()['email'];
    }

    /*
    | getFollowing get number of following on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowing()
    {
        return $this->getGithubUserAsArray()['following'];
    }

    /*
    | getFollowers get number of followers on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowers()
    {
        return $this->getGithubUserAsArray()['followers'];
    }

    /*
    | getCreatedAt get createdAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCreatedAt()
    {
        return $this->getGithubUserAsArray()['created_at'];
    }

    /*
    | getUpdatedAt get UpdatedAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUpdatedAt()
    {
        return $this->getGithubUserAsArray()['updated_at'];
    }

}
