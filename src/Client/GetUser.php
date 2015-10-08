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
    | getGithubUserInfoString get user info on Github
    | Accepts no parameter
    | @return json response
    */
    public function getGithubUserAsArray()
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
        $data =  $this->getGithubUserInfoString();
        return json_decode($data, true);
    }

    /*
    | getId get user id on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getId()
    {
        return $this->getGithubUser()['id'];
    }

    /*
    | getLogin get user login on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLogin()
    {
        return $this->getGithubUser()['login'];
    }

    /*
    | getName get user name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getName()
    {
        return $this->getGithubUser()['name'];
    }

    /*
    | getAvatar get Avatar name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getAvatar()
    {
        return $this->getGithubUser()['avatar_url'];
    }

    /*
    | getUrl get url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUrl()
    {
        return $this->getGithubUser()['url'];
    }

    /*
    | getHtmlUrl get html_url name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getHtmlUrl()
    {
        return $this->getGithubUser()['html_url'];
    }

    /*
    | getType get type name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getType()
    {
        return $this->getGithubUser()['type'];
    }

    /*
    | getCompany get company name on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCompany()
    {
        return $this->getGithubUser()['company'];
    }

    /*
    | getLocation get location on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getLocation()
    {
        return $this->getGithubUser()['location'];
    }

    /*
    | getEmail get email on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getEmail()
    {
        return $this->getGithubUser()['email'];
    }

    /*
    | getFollowing get number of following on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowing()
    {
        return $this->getGithubUser()['following'];
    }

    /*
    | getFollowers get number of followers on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getFollowers()
    {
        return $this->getGithubUser()['followers'];
    }

    /*
    | getCreatedAt get createdAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getCreatedAt()
    {
        return $this->getGithubUser()['created_at'];
    }

    /*
    | getUpdatedAt get UpdatedAt on Github
    | Accepts no parameter
    | @return array of objects
    */
    public function getUpdatedAt()
    {
        return $this->getGithubUser()['updated_at'];
    }

}
