<?php

include "conexao.php";



if(isset($_POST['nome'])){$nome=$_POST['nome'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['cpf'])){$cpf=$_POST['cpf'];}
if(isset($_POST['numcel'])){$numcel=$_POST['numcel'];}
if(isset($_POST['datans'])){$datans=$_POST['datans'];}

echo $nome; 
echo $email;
echo $cpf;
echo $numcel;
echo $datans;


if (isset ($_POST['SendCadUser'])) {
 
    try
    {
    
        $comando= $conn->prepare(" INSERT INTO tb_cliente ( NOME_CLIENTE, EMAIL_CLIENTE, CPF_CLIENTE, TEL_CLIENTE, DTA_NASC_CLIENTE ) values(?,?,?,?,?)" );
        $comando->bindParam(1,$nome);
        $comando->bindParam(2,$email);
        $comando->bindParam(3,$cpf);
        $comando->bindParam(4,$numcel);
        $comando->bindParam(5,$datans);
        
    
        $comando->execute();
    
    
        $dados=$comando->fetchAll(PDO::FETCH_ASSOC);
    
    if ($comando->rowCount()>0)
    
    {
       echo "cadastrado com sucesso";
    
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
}

    header('Location: ./myAcc.php');

    ?>