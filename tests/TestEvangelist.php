<?php
namespace Test;

use Emeka\Evangelist\Evangelist;
use Emeka\Evangelist\client\GetUser;

class ExampleTest extends \PHPUnit_Framework_TestCase
{

    public function testUser()
    {
        $user = new GetUser('andela-eosuagwu');
        $this->assertEquals(array($user->getEvangeInfo()));

    }
}