<?php

namespace Vushop\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
        ;

        try {
            // The Query::getSingleResult() method throws an exception
            // if there is no record matching the criteria.
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            $message = sprintf(
                '"%s" is invalid, please check again',
                $username
            );
            //throw new UsernameNotFoundException($message);
            throw new \Symfony\Component\Security\Core\Exception\BadCredentialsException($message);
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
       
        $class = get_class($user);
        //var_dump($class);exit;
        
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        } 
        
         return $this->find($user->getId());
        //return $this->loadUserByUsername($user->getId());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
            || is_subclass_of($class, $this->getEntityName());
    }
}

