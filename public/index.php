<?php


require_once __DIR__ . "/../vendor/autoload.php";


use clubMotor\App\Router;


Router::add("GET", "/", \clubMotor\Controller\HomeController::class, 'index');
Router::add("GET", '/article', \clubMotor\Controller\ArticleController::class, 'index');
Router::add("GET", "/auth/login", \clubMotor\Controller\FormController::class, "login");
Router::add("POST", "/auth/login", \clubMotor\Controller\FormController::class, "postLogin");
Router::add("GET", "/auth/register", \clubMotor\Controller\FormController::class, 'register');

Router::run();