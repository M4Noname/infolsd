<?php

$host="localhost";
$user="root";
$sen="";
$bd="infolsd";

$conect=mysqli_connect($host,$user,$sen,$bd);

if(!$conect){
    echo"houve um erro:".mysqli_connect_error();
}

else{
    echo"deu foi booom boy";
}
?>
