<?php
namespace App\Custom;

class NotificationService
{
    private $proveedor;

    public function __construct(MailerProvider $proveedor)
    {
        $this->proveedor = $proveedor;
    }

    function notify(User $user, $message)
    {
        $respuesta = $this->proveedor->send($user->email, $message);

        if ($respuesta) {
            return "Enviado email al usuario ".$user->nombre.".";
        } else {
            return "No enviado email al usuario ".$user->nombre.".";
        }
    }
}
?>