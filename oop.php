<?php
    class Database {
        public $ostia;
 
        public function __construct($db = "ostia", $user="root", $pwd="", $host="localhost:3307")
        {
            try {
                $this->ostia = new PDO("mysql:host=$host; dbname=$db", $user, $pwd);
                $this->ostia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "connected to database $db";
            }
            catch(PDOException $e){
                echo("Connection failed: " . $e->getMessage());
            }
        }
    }
 

?>
