<?php namespace Ace\Account;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;

use Hateoas\Configuration\Annotation\Relation;

/**
 * @XmlRoot("user")
 *
 * @Relation("self", href = "expr('/api/users/' ~ object.getId())")
 */
class User
{
    /** @XmlAttribute */
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
