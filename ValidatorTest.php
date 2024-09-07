<?php
require_once 'UserValidator.php';

class ValidatorTest
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
    public function TestPasswordValidationWithTheConditions()
    {
        $validator = new UserValidator();
        $password = "Secret123!";
        if ($validator->validatePassword($password)) {
            echo "Passed\n";
        } else {
            echo "Password is invalid.\n";
        }
    }
    public function TestPasswordValidationShorterThanEightCharacters()
    {
        $validator = new UserValidator();
        $password = "Ss123!";
        if ($validator->validatePassword($password)) {
            echo "Passed\n";
        } else {
            echo "Password is invalid.\n";
        }
    }
    public function TestPasswordValidationWithoutLowercaseCharacter()
    {
        $validator = new UserValidator();
        $password = "SECRET123!!";
        if ($validator->validatePassword($password)) {
            echo "Passed\n";
        } else {
            echo "Password is invalid.\n";
        }
    }
    public function TestPasswordValidationWithoutUppercaseCharacter()
    {
        $validator = new UserValidator();
        $password = "secret123!";
        if ($validator->validatePassword($password)) {
            echo "Passed\n";
        } else {
            echo "Password is invalid.\n";
        }
    }
    public function TestPasswordValidationWithoutSpecialCharacter()
    {
        $validator = new UserValidator();
        $password = "Secret12345";
        if ($validator->validatePassword($password)) {
            echo "Passed\n";
        } else {
            echo "Password is invalid.\n";
        }
    }
}
$test = new ValidatorTest();
$test->TestEmailValidatorWithDomain();
echo ("<br>");
$test->TestEmailValidatorWithDomainAndSubdomain();
echo ("<br>");
$test->TestEmailValidatorWithTwoDot();
echo ("<br>");
$test->TestEmailValidatorWithNumberOnFirstCharacter();
echo ("<br>");
$test->TestEmailValidatorWithOneCharacterAfterDot();
echo ("<br>");

$test->TestPasswordValidationWithTheConditions();
echo ('<br>');
$test->TestPasswordValidationShorterThanEightCharacters();
echo ('<br>');
$test->TestPasswordValidationWithoutLowercaseCharacter();
echo ('<br>');
$test->TestPasswordValidationWithoutUppercaseCharacter();
echo ('<br>');
$test->TestPasswordValidationWithoutSpecialCharacter();
echo ('<br>');
