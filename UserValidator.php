<?php

class UserValidator
{

    public function validateEmail(string $email): bool
    {
        $pattern = "/^[a-zA-Z][a-zA-Z0-9]*@[a-zA-Z0-9]([a-zA-Z0-9]*[a-zA-Z0-9])?(\.[a-zA-Z0-9]([a-zA-Z0-9]*[a-zA-Z0-9])?)*\.[a-zA-Z]{2,}$/";
        return (bool)preg_match($pattern, $email);
    }
}