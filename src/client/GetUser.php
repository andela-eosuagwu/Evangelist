<?php

namespace Emeka\Evangelist\client;

use Emeka\Evangelist\Evangelist;



class GetUser extends Evangelist
{

    public function getId()
    {
        return $this->getEvangeInfo->id;
    }

    public function getLogin()
    {
        return $this->getEvangeInfo->login;
    }

    public function getName()
    {
        return $this->getEvangeInfo->name;
    }

    public function getAvatar()
    {
        return $this->getEvangeInfo->avatar_url;
    }

    public function getUrl()
    {
        return $this->getEvangeInfo->url;
    }

    public function getHtmlUrl()
    {
        return $this->getEvangeInfo->html_ur;
    }

    public function getType()
    {
        return $this->getEvangeInfo->type;
    }

    public function getCompany()
    {
        return $this->getEvangeInfo->company;
    }

    public function getLocation()
    {
        return $this->getEvangeInfo->location;
    }

    public function getEmail()
    {
        return $this->getEvangeInfo->email;
    }

    public function getFollowing()
    {
        return $this->getEvangeInfo->following;
    }

    public function getFollowers()
    {
        return $this->getEvangeInfo->followers;
    }

    public function getCreatedAt()
    {
        return $this->getEvangeInfo->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->getEvangeInfo->updated_at;
    }




}














?>