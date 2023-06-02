<?php

include("conect.php");
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="INSERT INTO infolsd(nome,sobrenome,email,senha)value('$nome,$sobrenome,$email,$senha')";

if(mysqli_query($conect,$sql)){
    echo"deu foi booooooom boy:";
}
else{
    echo"erro...... sei la kk:".mysqli_connect_error();

}

?>