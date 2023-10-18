<?php
/*clase para cerar connexion a la base de datos*/
class createconnexion{
    public $host = 'localhost', $user = 'root', $password = '', $databse = 'faster';

    public function getconnect(){
        $connexion = new mysqli($this->host, $this->user, $this->password, $this->databse);
        return $connexion;
    }
}
?>