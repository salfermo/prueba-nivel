<?php
namespace App\Custom;

class User
{
    private $id;
    public $nombre;
    public $email;

    function __construct($id, $nombre, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }
}
?>