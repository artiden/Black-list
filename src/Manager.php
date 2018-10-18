<?php

namespace Artiden\Blacklist;

use Illuminate\Support\Facades\Validator;

class Manager
{
    public function isValidEmail(string $email)
    {
        return !Validator::make(compact('email'), [
            'email' => 'required|string|email',
        ])
        ->fails();
    }
}
