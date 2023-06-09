<?php

include_once 'conexao.php';
/*

if(isset($_POST['nomeprod'])){$nomeprod=$_POST['nomeprod'];}
if(isset($_POST['qtd'])){$qtd=$_POST['qtd'];}
if(isset($_POST['descprod'])){$descprod=$_POST['descprod'];}
*/

$nomeprod=filter_input(INPUT_POST, 'nomeprod', FILTER_SANITIZE_SPECIAL_CHARS);
$qtd=filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_NUMBER_INT);
$descprod=filter_input(INPUT_POST, 'descprod', FILTER_SANITIZE_SPECIAL_CHARS);
$precoprod=filter_input(INPUT_POST, 'precoprod', FILTER_SANITIZE_NUMBER_FLOAT);

try
{

    $comando= $conn->prepare(" INSERT INTO tb_produto ( NOME_PROD, QTD_PROD, DESC_PROD, VALOR_COMP_PROD ) values(?,?,?,?)" );
    $comando->bindParam(1,$nomeprod);
    $comando->bindParam(2,$qtd);
    $comando->bindParam(3,$descprod);
    $comando->bindParam(4,$precoprod);
 

    $comando->execute();


    $dados=$comando->fetchAll(PDO::FETCH_ASSOC);

if ($comando->rowCount()>0)

{
   echo "cadastrando com sucesso";

}


else
{
    echo "erro ao cadastrar ";
}


}



catch(PDOException $erro)
{ 
   $erro->getMessage();
}


?>