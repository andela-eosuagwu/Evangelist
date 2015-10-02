<?php
namespace Test;

use PHPUnit_Framework_TestCase;
use Emeka\Evangelist\Evangelist;
use Emeka\Evangelist\Client\GetUser;
class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function test_getGithubUser_return_array()
    {
        $evangelist = new GetUser('andela-eosuagwu');
        $data = $evangelist->getGithubUser();
        $this->assertInternalType('array', $data);
    }

    public function test_getGithubUser()
    {
        $evangelist = new GetUser('andela-eosuagwu');
        $data = $evangelist->getGithubUserInfoString();
        $this->assertInternalType('string', $data);
    }

    public function test_user_id_return_int()
    {
        $evangelist = new GetUser('andela-eosuagwu');
        $data = $evangelist->getId();
        $this->assertInternalType('int', $data);
    }
}