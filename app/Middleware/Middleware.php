<?php

namespace clubMotor\Middleware;

interface Middleware
{
    function before(): void;
}