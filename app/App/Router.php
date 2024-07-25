<?php

namespace clubMotor\App;

/**
 *  Memodelkan routing aplikasi
 */
class Router
{

    /**
     * Daftar route yang ada
     * @var array
     */
    private static array $routes = [];

    /**
     * @param string $method
     * @param string $path
     * @param string $controller
     * @param string $function
     * @return void
     */
    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    /**
     * @return void
     */
    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . '$#';
            if (preg_match($pattern, $path, $variables) && $method == $route['method']) {
                $function = $route['function'];
                $controller = new $route['controller'];

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        http_response_code(404);
        View::render("ErrorPage/404", []);
    }
}