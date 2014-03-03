<?php

use Ace\Account\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        $user = new User;
        $id = $user->getId();
    }
}
