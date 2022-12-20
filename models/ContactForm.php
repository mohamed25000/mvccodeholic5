<?php

namespace app\models;

use app\core\Model;

class ContactForm extends Model
{
    public string $subject = "";
    public string $email = "";
    public string $body = "";

    function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
            ];
    }

    public function labels(): array
    {
         return [
             'subject' => "What is your subject",
             'email' => "Enter your email",
             'body' => "Write your message here",
         ];
    }

    public function send()
    {
        return true;
    }
}