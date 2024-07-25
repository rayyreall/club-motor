<?php

namespace clubMotor\Controller;

use clubMotor\App\View;
use clubMotor\Domain\User;
use clubMotor\Helper\SessionHelper;
use clubMotor\Model\UserModel;
use Respect\Validation\Validator as v;

class FormController
{
    public function login(): void
    {
        SessionHelper::startSession();

        View::render("Form/login", []);
    }
    public function register(): void
    {
        SessionHelper::startSession();
        View::render("Form/register", []);
    }
    public function postLogin(): void
    {
        SessionHelper::startSession();
        $userModel = new \clubMotor\Model\UserModel();

        $user = $userModel->findByUsernameAndPassword($_POST['username'], $_POST['password']);


        if ($user) {
            $userDomain = new User();
            $userDomain->setId((int) $user['id']);
            $userDomain->setName($user['name']);
            $userDomain->setUsername($user['username']);
            $userDomain->setEmail($user['email']);
            $userDomain->setPassword(null);

            SessionHelper::set("user", $user);
            header("Location: /");
        } else {
            SessionHelper::setFlash("error", "Login gagal");
           header("Location: /auth/login");
        }
    }
    public function postRegister(): void
    {
        SessionHelper::startSession();
        $userModel = new UserModel();
        $user = new User();

        if (!$this->validateInput()) {
            SessionHelper::setFlash("error", "Data yang dimasukkan tidak valid");
            header("Location: /auth/register");
            exit;
        }




        $user = $userModel->findByUsername($_POST['username']);

        if ($user) {
            SessionHelper::setFlash("error", "Username sudah terdaftar");
            header("Location: /auth/register");
        } else {
            $user = new User();
            $user->setName($_POST['name']);
            $user->setEmail($_POST['email']);
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);

            // Akun tidak ter enkripsi!
            $userModel->insert($user);
            SessionHelper::setFlash("success", "Register berhasil");
            $user->setPassword(null);
            SessionHelper::set("user", $user);
            header("Location: /auth/login");
        }
    }
    public function logout(): void
    {
        SessionHelper::startSession();
        SessionHelper::destroySession();
        header("Location: /");
    }
    public function validateInput(): bool
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        return v::stringType()->notEmpty()->validate($name) &&
            v::email()->validate($email) &&
            v::stringType()->notEmpty()->validate($username) &&
            v::stringType()->notEmpty()->validate($password);
    }
}