<?php

namespace clubMotor\Controller;

use clubMotor\App\View;
use clubMotor\Helper\SessionHelper;

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
            SessionHelper::setFlash("success", "Login berhasil");
            header("Location: /");
        } else {
            SessionHelper::setFlash("error", "Login gagal");
           header("Location: /auth/login");
        }
    }
}