<?php namespace App\Custom;

    class NotificationService
    {
        private $proveedor;

        public function __construct(SmtpProvider $proveedor1 = null, SesProvider $proveedor2 = null)
        {
            if ($proveedor2 != null) {
                $this->proveedor = $proveedor2;
            } else {
                $this->proveedor = $proveedor1;
            }
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