<?php
namespace Emeka\Evangelist\Client;

use Emeka\Evangelist\Evangelist;

class GetUser extends Evangelist
{
    protected $github_username;

    public function __construct ($github_username)
    {
        $this->github_username = $github_username;
    }

    public function getGithubUserInfo()
    {
        $data =  $this->processUserInfo($this->github_username);
        return $data;
    }

    public function getGithubUser()
    {
        $data =  $this->processUserInfo($this->github_username);
        return json_decode($data, true);
    }

    public function getId()
    {
        return $this->getGithubUser()['id'];
    }
    public function getLogin()
    {
        return $this->getGithubUser()['login'];
    }
    public function getName()
    {
        return $this->getGithubUser()['name'];
    }
    public function getAvatar()
    {
        return $this->getGithubUser()['avatar_url'];
    }
    public function getUrl()
    {
        return $this->getGithubUser()['url'];
    }
    public function getHtmlUrl()
    {
        return $this->getGithubUser()['html_ur'];
    }
    public function getType()
    {
        return $this->getGithubUser()['type'];
    }
    public function getCompany()
    {
        return $this->getGithubUser()['company'];
    }
    public function getLocation()
    {
        return $this->getGithubUser()['location'];
    }
    public function getEmail()
    {
        return $this->getGithubUser()['email'];
    }
    public function getFollowing()
    {
        return $this->getGithubUser()['following'];
    }
    public function getFollowers()
    {
        return $this->getGithubUser()['followers'];
    }
    public function getCreatedAt()
    {
        return $this->getGithubUser()['created_at'];
    }
    public function getUpdatedAt()
    {
        return $this->getGithubUser()['updated_at'];
    }

}
