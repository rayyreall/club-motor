<?php


require_once __DIR__ . "/../vendor/autoload.php";


use clubMotor\App\Router;


Router::add("GET", "/", \clubMotor\Controller\HomeController::class, 'index');
Router::add("GET", '/article', \clubMotor\Controller\ArticleController::class, 'index');
Router::add("GET", "/auth/login", \clubMotor\Controller\FormController::class, "login");
Router::add("GET", "/auth/register", \clubMotor\Controller\FormController::class, 'register');
Router::add("GET", "/auth/logout", \clubMotor\Controller\FormController::class, "logout",  [\clubMotor\Middleware\AuthMiddleware::class]);

Router::add("POST", "/auth/login", \clubMotor\Controller\FormController::class, "postLogin");
Router::add("POST", "/auth/register", \clubMotor\Controller\FormController::class, "postRegister");
Router::run();