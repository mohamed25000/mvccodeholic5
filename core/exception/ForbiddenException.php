<?php

namespace app\core\exception;

class ForbiddenException extends \Exception
{
    protected $message = "you don't have permission to access this path !";
    protected $code = 403;
}