<?php

namespace App\Exceptions;

use Exception;

class RouteNotFoundException extends Exception
{
    protected $message = '404 Not Found';
}

