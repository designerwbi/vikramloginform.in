<?php
$host = "localhost";
$user = "postgres";
$password = "root";
$db = "mydata";
$con = pg_connect("host=$host dbname=$db user=$user password=$password")
or die("Could not connect to Server\n");
if(!$con) 
{
    echo "Error : Unable to open database\n";
}
else{
    $name = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO register (name,password) values ('$name','$password')";
    $result= pg_query($con,$query);
    header("Location: login-13.html");
    pg_close($con);
}
?>







































