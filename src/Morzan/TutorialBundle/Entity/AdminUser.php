<?php

namespace Morzan\TutorialBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUser
 * @ORM\Entity
 *
 * @author arturo
 */
class AdminUser extends BaseUser  {
    
    /**
     * @ORM\Column(type="string", unique=true)
     *
     * @var string
     */
    private $username;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($psUsername)
    {
        $this->username = $psUsername;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

}
