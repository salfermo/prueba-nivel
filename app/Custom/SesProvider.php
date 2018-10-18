<?php
namespace App\Custom;

use App\Custom\MailerProvider;

class SesProvider implements MailerProvider
{
    public function send($email, $message)
    {
        return false;
    }
}
?>