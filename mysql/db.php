<?php
global $connection;
global $query;


function Connection()
{
    $connection = mysqli_connect("localhost","root","","objednavky");
}

function Add(){
    $jmeno =  $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];	

    $query = "INSERT INTO objednavky    (jmeno,prijmeni,mail,tel) VALUES ('$jmeno','$prijmeni','$email','$tel' )";
}



?>