<?php
namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserListener
{
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof User || (null === $this->tokenStorage->getToken())) {
            return;
        }

        $client = $this->tokenStorage->getToken()->getUser();

        $entity->setClient($client);
    }
}
