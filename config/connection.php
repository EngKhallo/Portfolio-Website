<?php
    function connect(){
        return $conn = mysqli_connect($servername="localhost", $username="root", $password="", $dbname="portfolio");
        if(!$conn) die("Connection Failed!");
        return $conn;
    }
?>
