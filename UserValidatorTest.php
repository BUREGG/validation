<?php
require_once 'UserValidator.php';

class UserValidatorTest
{
    public function TestEmailValidatorWithDomain()
    {
        $validator = new UserValidator();
        $email = "test@example.com";
        $expectedValidationResult = true;  
        if (!($validator->validateEmail($email) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestEmailValidatorWithDomainAndSubdomain()
    {
        $validator = new UserValidator();
        $email = "test@example.net.com";
        $expectedValidationResult = true;  
        if (!($validator->validateEmail($email) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestEmailValidatorWithTwoDot()
    {
        $validator = new UserValidator();
        $email = "test@example..com";
        $expectedValidationResult = false;  
        if (!($validator->validateEmail($email) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestEmailValidatorWithNumberOnFirstCharacter()
    {
        $validator = new UserValidator();
        $email = "1@example.com";
        $expectedValidationResult = false;
        if (!($validator->validateEmail($email) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestEmailValidatorWithOneCharacterAfterDot()
    {
        $validator = new UserValidator();
        $email = "test@example.c";
        $expectedValidationResult = false;
        if (!($validator->validateEmail($email) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestPasswordValidationWithTheConditions()
    {
        $validator = new UserValidator();
        $password = "Secret123!";
        $expectedValidationResult = true;
        if (!($validator->validatePassword($password) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestPasswordValidationShorterThanEightCharacters()
    {
        $validator = new UserValidator();
        $password = "Ss123!";
        $expectedValidationResult = false;
        if (!($validator->validatePassword($password) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestPasswordValidationWithoutLowercaseCharacter()
    {
        $validator = new UserValidator();
        $password = "SECRET123!!";
        $expectedValidationResult = false;
        if (!($validator->validatePassword($password) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestPasswordValidationWithoutUppercaseCharacter()
    {
        $validator = new UserValidator();
        $password = "secret123!";
        $expectedValidationResult = false;
        if (!($validator->validatePassword($password) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }

    public function TestPasswordValidationWithoutSpecialCharacter()
    {
        $validator = new UserValidator();
        $password = "Secret12345";
        $expectedValidationResult = false;
        if (!($validator->validatePassword($password) == $expectedValidationResult)) {
            echo 'Test ' . __FUNCTION__ . ' failed';
        }
        echo ".";
    }
}

$test = new UserValidatorTest();
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
?>
