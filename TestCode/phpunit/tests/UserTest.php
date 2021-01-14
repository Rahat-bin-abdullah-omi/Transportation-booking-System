<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetTheFirstName()
{
$user = new \App\Models\User;
$user->setFirstName('Amit');
$this->assertEquals($user->getFirstName(), 'Amit');
}

public function testThatWeCanGetTheLastName()
{
$user = new \App\Models\User;
$user->setLastName('Abdullah');
$this->assertEquals($user->getLastName(), 'Abdullah');
}
public function testFullNameIsReturned(){
    $user = new \App\Models\User;
    $user->setFirstName('Amit');
    $user->setLastName('Abdullah');

    $this->assertEquals($user->getFullName(), 'Amit Abdullah');
}
public function testEmailAddressCanBeSet()
{

    $user = new \App\Models\User;
    $user->setEmail('amit@gmail.com');
    $this->assertEquals($user->getEmail(),'amit@gmail.com');
}
public function testEmailVariablesConatainCorrectValues()
{
    $user = new \App\Models\User;
    $user->setFirstName('Amit');
    $user->setLastName('Abdullah');
    $user->setEmail('amit@gmail.com');

    $emailVariables=$user->getEmailVariables();

    $this->assertArrayHasKey('full_name',$emailVariables);
    $this->assertArrayHasKey('email',$emailVariables);

    $this->assertEquals($emailVariables['full_name'],'Amit Abdullah');
    $this->assertEquals($emailVariables['email'],'amit@gmail.com');
}
}
