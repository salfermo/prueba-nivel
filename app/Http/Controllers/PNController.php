<?php
namespace App\Http\Controllers;

use App\Custom\User;
use App\Custom\SmtpProvider;
use App\Custom\NotificationService;
use Illuminate\Http\Request;

class PNController extends Controller
{
    private $service;

    public function inicio()
    {
        return view('welcome');
    }

    public function sendNotification($id)
    {
        // Creación de un usuario cualquiera para comprobar el funcionamiento del código.
        $user = new User($id, 'Salvador','salvador@correo.com');
        
        $message = "Esto es una prueba de nivel para Ecommerce Farm.";

        $provider = new SmtpProvider();
        $this->service = new NotificationService($provider);

        // Se envia el email usando el método 'notify', almacenando a continuación el resultado.
        $result = $this->service->notify($user, $message);
    
        // Creación de JSON con la información solicitada en el enunciado del ejercicio.
        $response = array("id"=>$id, "email"=>$user->email, "message"=>$message, "result"=>$result);

        return $response;
    }
}

?>