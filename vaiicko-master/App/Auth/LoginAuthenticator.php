<?php

namespace App\Auth;

use App\Models\Osoba;

class LoginAuthenticator extends DummyAuthenticator
{

        public function login($login, $password): bool
        {
            $osoba = Osoba::getAll("login = ?", [$login]);
            if (count($osoba) == 1) {
                $osoba = $osoba[0];
                if (password_verify($password, $osoba->getPassword())) {
                    $_SESSION['user'] = $login;
                    return true;
                } else {
                    return false;
                }
            } else {
                    return false;
                }
            }


    //$hashToStoreInDb = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$isPasswordCorrect = password_verify($_POST['password'], $existingHashFromDb);

    public function isLogged(): bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }


}