<?php

include("conect.php");
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="INSERT INTO user(nome,sobrenome,email,senha)value('$nome,$sobrenome,$email,$senha')";

if(mysqli_query($conect,$sql)){
    echo"erro".mysqli_connect_error();
}
else{
    echo"deu foi booooooom boy :D";

}

?>