<?php 
    class db_sanPham {
        public $conn;
        protected $serverName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $dbName = "quanao";
        function __construct(){
            $this->conn = mysqli_connect($this->serverName,$this->userName,$this->passWord,$this->dbName);
        }
    }
?> 