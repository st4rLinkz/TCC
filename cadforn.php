<?php


include_once('conexao.php');







$nomeforn=filter_input(INPUT_POST, 'nomeforn', FILTER_SANITIZE_SPECIAL_CHARS);
$cnpjforn=filter_input(INPUT_POST, 'cnpjforn', FILTER_SANITIZE_SPECIAL_CHARS);
$razforn=filter_input(INPUT_POST, 'razforn', FILTER_SANITIZE_SPECIAL_CHARS);
$emailforn=filter_input(INPUT_POST, 'emailforn', FILTER_SANITIZE_SPECIAL_CHARS);
$nomefantasia=filter_input(INPUT_POST, 'nomefantasia', FILTER_SANITIZE_SPECIAL_CHARS);



try
{

    $comando= $conn->prepare(" INSERT INTO tb_forn (NOME_FORN,  CNPJ_FORN,  RAZ_FORN, EMAIL_FORN, NOME_FANTASIA_FORN ) values(?,?,?,?,?)" );
    $comando->bindParam(1,$nomeforn);
    $comando->bindParam(2,$$cnpjforn);
    $comando->bindParam(3,$razforn);
    $comando->bindParam(4,$emailforn);
    $comando->bindParam(5,$nomefantasia);

 

    $comando->execute();


   

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




































