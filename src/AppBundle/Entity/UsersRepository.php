<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * UsersRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository implements UserLoaderInterface
{
    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        return $this->getEntityManager()->createQuery("select u from Users where u.cidentificator = :username")->setParameter("username", $username)->getResult();
    }
}