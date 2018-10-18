<?php

namespace Artiden\Blacklist;

use Illuminate\Support\Facades\Validator;
use Artiden\Blacklist\exceptions\InvalidEmailException;

class Manager
{
    public function isValidEmail(string $email):bool
    {
        return !Validator::make(compact('email'), [
            'email' => 'required|string|email',
        ])
        ->fails();
    }

    public function add(string $email)
    {
        $this->validateEmail($email);

        return BlackList::create([
            'email' => $email,
        ]);
    }

    public function exists(string $email):bool
    {
        $this->validateEmail($email);

        return BlackList::where('email', $email)
        ->exists();
    }

    public function delete(string $email)
    {
        $this->validateEmail($email);

        return BlackList::where('email', $email)
        ->delete();
    }

    private function validateEmail(string $email)
    {
        if (!$this->isValidEmail($email)) {
            throw new InvalidEmailException;
        }
    }
}
