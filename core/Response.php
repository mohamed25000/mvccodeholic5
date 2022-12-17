<?php

namespace app\core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        if(!headers_sent()) {
            header('Location: ' . $url);
        } else {
            echo "<script type='text/javascript'>
                    window.location.href = '/'
                  </script>";
        }
    }
}