<?php

namespace Emeka\Evangelist;


/**
*
*/
class Get extends Evangelist
{

    function __construct(argument)
    {
        # code...
    }

    public function getId()
    {
        $id =  $this->getEvangelist()->id;
        return $id;
    }

    public function username()
    {
        $login =  $this->getEvangelist()->login;
        return $login;
    }

    public function name()
    {
        $name =  $this->getEvangelist()->name;
        return $name;
    }

    public function company()
    {
        $company =  $this->getEvangelist()->company;
        return $company;
    }

    public function bio()
    {
        $bio =  $this->getEvangelist()->bio;
        return $bio;
    }

    public function avatar_url()
    {
        $avatar_url =  $this->getEvangelist()->avatar_url;
        return $avatar_url;
    }

    public function location()
    {
        $location =  $this->getEvangelist()->location;
        return $location;
    }

    public function email()
    {
        $email =  $this->getEvangelist()->email;
        return $email;
    }

    public function followers()
    {
        $followers =  $this->getEvangelist()->followers;
        return $followers;
     }

    public function following()
    {
        $following =  $this->getEvangelist()->following;
        return $following;
    }


}











?>