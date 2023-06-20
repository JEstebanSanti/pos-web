<?php 
class MYPOSDB{
    private string $host;
    private string $user;
    private string $pass;
    private string $db;
    private string $con;

    public function __construct(string $hosto, string $useru, string $passworu, string $databaseru, ) {
        $this->host = $hosto;
        $this->user = $useru;
        $this->pass = $passworu;
        $this->db= $databaseru;
    }
    public function connectDB(){
        $this->con = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        $this->con->set_charset("utf8");    
        return $this->con;
    }
    public function desconectDB(){
        mysqli_close(conectarDb());
    }

}