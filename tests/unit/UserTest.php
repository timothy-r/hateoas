<?php

use Ace\Account\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        $id = 878;
        $user = new User($id, 'Brian', 'Jones');
        $this->assertSame($id, $user->getId());
    }

    public function testCanGenerateJson()
    {

    }
}
