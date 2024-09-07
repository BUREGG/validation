<?php

class UserValidator
{

    public function validateEmail(string $email): bool
    {
        $pattern = "/^[a-zA-Z][a-zA-Z0-9]*@[a-zA-Z0-9]([a-zA-Z0-9]*[a-zA-Z0-9])?(\.[a-zA-Z0-9]([a-zA-Z0-9]*[a-zA-Z0-9])?)*\.[a-zA-Z]{2,}$/";
        return (bool)preg_match($pattern, $email);
    }
    public function __construct(private readonly int $minPasswordLength = 8) {}
    public function validatePassword(string $password): bool
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        return match (true) {
            !$uppercase, !$lowercase, !$number, !$specialChars, strlen($password) < $this->minPasswordLength => false,
            default => true,
        };
    }
}
