<?php


use PHPUnit\Framework\TestCase;

class TestUserModel extends TestCase
{
    public function testFindAll()
    {
        $userModel = new \clubMotor\Model\UserModel();
        $users = $userModel->findAll();
        var_dump($users);
        $this->assertIsArray($users);
    }
    public function testFindByUsernameAndPassword()
    {
        $userModel = new \clubMotor\Model\UserModel();
        $user = $userModel->findByUsernameAndPassword("admin", "admin");
        var_dump($user);
        $this->assertIsArray($user);
    }
    public function testFindByUsername()
    {
        $userModel = new \clubMotor\Model\UserModel();
        $user = $userModel->findByUsername("admin");
        var_dump($user);
        $this->assertIsArray($user);
    }
}
