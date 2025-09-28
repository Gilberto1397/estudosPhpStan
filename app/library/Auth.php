<?php

class Auth
{
    /**
     * @return bool
     */
    public function attemp(): bool
    {
        $user = new User();
        $userFound = $user->find();

        if ($userFound) {
            return true;
        }
        return false;
    }
}