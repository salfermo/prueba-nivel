<?php
namespace App\Custom;

interface MailerProvider
{
    public function send($email, $message);
}
?>