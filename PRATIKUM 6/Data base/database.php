<<<<<<< HEAD
<?php

class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "perpustakaan";
    private $koneksi = null;
    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);
    } 

    public function __destruct()
    {
    $this->koneksi->close();
    }
    public function getkoneksi()
    {
        return $this->koneksi;
    }

=======
<?php

class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "perpustakaan";
    private $koneksi = null;
    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);
    } 

    public function __destruct()
    {
    $this->koneksi->close();
    }
    public function getkoneksi()
    {
        return $this->koneksi;
    }

>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
}