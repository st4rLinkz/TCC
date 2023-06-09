<?php
/* conexao sem a porta
$usuario='root';
$senha='';
$Bco='db_brutaltype';
try{
$conn = new PDO("mysql:host=localhost; dbname=$Bco", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conn->exec("set names utf8");
}
catch(PDOException $erro)
{
 echo "Erro na conexão". $erro->getMessage();
} 
*/
$usuario='root';
$senha='';
$Bco='db_brutaltype';
$port='3306';

try{
$conn = new PDO("mysql:host=localhost; port=$port; dbname=$Bco", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conn->exec("set names utf8");


}

catch(PDOException $erro)
{
 echo "Erro na conexão". $erro->getMessage();
}




 



?>