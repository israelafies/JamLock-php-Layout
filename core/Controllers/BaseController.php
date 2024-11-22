<?php

namespace Core\Controllers;

class BaseController
{
    public function loadView($view, $data = [])
    {
        extract($data);
        include "../views/{$view}.php";
    }
}
