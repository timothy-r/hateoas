<?php namespace Ace\Account;

use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * @Serializer\XmlRoot("user")
 *
 * @Hateoas\Relation("self", href = "expr('/api/users/' ~ object.getId())")
 */
class User
{
    /** @Serializer\XmlAttribute */
    private $id;
    private $firstName;
    private $lastName;

    public function getId() {}
}
