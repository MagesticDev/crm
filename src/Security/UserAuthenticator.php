<?php

namespace App\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserAuthenticator extends Voter
{
    protected function supports($attribute, $subject)
    {
        if (!$subject instanceof User) {
            return false;
        }

        if (!in_array($attribute, ['ROLE_ADMIN', 'ROLE_USER'])) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        switch ($attribute) {
            case 'ROLE_ADMIN':
                return $this->canAccessAdmin($subject, $user);
            case 'ROLE_USER':
                return $this->canAccessUser($subject, $user);
        }

        return false;
    }

    private function canAccessAdmin(User $subject, UserInterface $user)
    {
      if ($user->getRoles() === ['ROLE_ADMIN']) {
          return true;
      }

      return false;
  }

  private function canAccessUser(User $subject, UserInterface $user)
  {
      if ($user->getRoles() === ['ROLE_ADMIN'] || $user->getRoles() === ['ROLE_USER']) {
          return true;
      }

      return false;
  }
}

