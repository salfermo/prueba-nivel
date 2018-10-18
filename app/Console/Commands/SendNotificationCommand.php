<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Custom\User;
use App\Custom\SesProvider;
use App\Custom\NotificationService;

class SendNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:notification {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Se obtiene el ID como argumento del comando.
        $id = $this->argument('id');

        // Creación de un usuario cualquiera para comprobar el funcionamiento del código.
        $user = new User($id, 'Salvador','salvador@correo.com');

        $message = "Esto es una prueba de nivel para Ecommerce Farm.";

        $provider = new SesProvider();
        $service = new NotificationService(null, $provider);

        // Se envia el email usando el método 'notify', almacenando a continuación el resultado.
        $result = $service->notify($user, $message);

        $this->info("id: ".$id);
        $this->info("email: ".$user->email);
        $this->info("message: ".$message);
        $this->info("result: ".$result);
    }
}
