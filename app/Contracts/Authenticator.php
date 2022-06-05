<?php

namespace App\Contracts;


interface Authenticator
{

    /**
     * Authenticate a user via the given credentials.
     *
     * @param  array  $credentials
     * @return \App\Models\User
     */
    public function authenticate(array $credentials);
}
