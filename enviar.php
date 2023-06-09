<?php




include_once 'conexao.php';


$nomecat=filter_input(INPUT_POST, 'nomecat', FILTER_SANITIZE_SPECIAL_CHARS);

$descat=filter_input(INPUT_POST, 'descat', FILTER_SANITIZE_SPECIAL_CHARS);

try
{

    $comando= $conn->prepare(" INSERT INTO tb_categoria ( NOME_CATEGORIA ,	DESC_CATEGORIA ) values(?,?)" );
    $comando->bindParam(1,$nomecat);
    $comando->bindParam(2,$descat);

 

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