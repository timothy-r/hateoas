<?php

use Ace\Account\User;
use Hateoas\HateoasBuilder;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

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
        $hateoas = HateoasBuilder::create()->build();
        $user = new User(101, 'Charlie', 'Bradford');

        $root = new JMS\Serializer\Annotation\XmlRoot('c');
        $attr = new JMS\Serializer\Annotation\XmlAttribute('c');
        $rel = new Hateoas\Relation;

        $json = $hateoas->serialize($user, 'json');
        var_dump($json);
    }
}
