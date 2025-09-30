<?php

class Auth
{
    /**
     * @return bool
     */
    public function attemp(): bool
    {
        $user = new User();
        $userFound = $user->find(6, '');

        echo $casa;
        echo $teste;

        if ($userFound) {
            return true;
        }
        return false;
    }
}