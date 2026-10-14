<?php

Class Database {
    private $host = "localhost";
    private $username = "root";
    private $senha = "";
    private $banco = "login";

    public $conn = '';
    public function conectar(){
        $conn = new myswli($this->host,$this->username,$this->senha,$this->banco);
        if($conn->connect_error){
            die("Deu Erro na conexão" . $this->$conn->connect_error);
        }
        return $this->conn;
}

}
?>