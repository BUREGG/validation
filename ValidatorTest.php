<?php
require_once 'UserValidator.php';

class EmailValidatorTest
{
    public function TestEmailValidatorWithDomain()
    {
        $validator = new UserValidator();
        $email = "test@example.com";
        if ($validator->validateEmail($email)) {
            echo "Passed\n";
        } else {
            echo "Email is invalid.\n";
        }
    }
    public function TestEmailValidatorWithDomainAndSubdomain()
    {
        $validator = new UserValidator();
        $email = "test@example.net.com";
        if ($validator->validateEmail($email)) {
            echo "Passed\n";
        } else {
            echo "Email is invalid.\n";
        }
    }
    public function TestEmailValidatorWithTwoDot()
    {
        $validator = new UserValidator();
        $email = "test@example..com";
        if ($validator->validateEmail($email)) {
            echo "Passed\n";
        } else {
            echo "Email is invalid.\n";
        }
    }
    public function TestEmailValidatorWithNumberOnFirstCharacter()
    {
        $validator = new UserValidator();
        $email = "1@example.com";
        if ($validator->validateEmail($email)) {
            echo "Passed\n";
        } else {
            echo "Email is invalid.\n";
        }
    }
    public function TestEmailValidatorWithOneCharacterAfterDot()
    {
        $validator = new UserValidator();
        $email = "test@example.c";
        if ($validator->validateEmail($email)) {
            echo "Passed\n";
        } else {
            echo "Email is invalid.\n";
        }
    }
    
}
$test = new EmailValidatorTest();
$test->TestEmailValidatorWithDomain();
echo("<br>");
$test->TestEmailValidatorWithDomainAndSubdomain();
echo("<br>");
$test->TestEmailValidatorWithTwoDot();
echo("<br>");
$test->TestEmailValidatorWithNumberOnFirstCharacter();
echo("<br>");
$test->TestEmailValidatorWithOneCharacterAfterDot();
echo("<br>");