<?php
namespace App\Custom;

use App\Custom\MailerProvider;

class SmtpProvider implements MailerProvider
{
    public function send($email, $message)
    {
        return true;
    }
}
?>