<?php

namespace clubMotor\Helper;

class SessionHelper
{
    public static function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public static function destroySession()
    {
        session_destroy();
    }
    public static function setFlash($key, $message): void
    {
        self::startSession();
        $_SESSION[$key] = $message;
    }

    public static function getFlash($key) {
        self::startSession();
        if (isset($_SESSION[$key])) {
            $message = $_SESSION[$key];
            unset($_SESSION[$key]);
            return $message;
        }
        return null;
    }
    public static function set($key, $value): void
    {
        self::startSession();
        $_SESSION[$key] = $value;
    }
    public static function get($key)
    {
        self::startSession();
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }
}