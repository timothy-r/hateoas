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
    private $first_name;
    private $last_name;
    
    public function __construct($id, $first, $last)
    {
        $this->id = $id;
        $this->first_name = $first;
        $this->last_name = $last;
    }

    public function getId()
    {
        return $this->id;
    }
}
