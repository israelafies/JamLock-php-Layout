<?php

namespace Core;

class App
{
    private $middleware = [];

    public function useMiddleware($middleware)
    {
        $this->middleware[] = $middleware;
    }

    public function run()
    {
        $request = $_SERVER;
        foreach ($this->middleware as $middleware) {
            $middleware->handle($request, function () {});
        }

        echo "Welcome to the PHP Framework!";
    }
}
