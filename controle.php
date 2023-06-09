<?php


$nome=$_GET['nome'];
$numcel=$_GET['numcel'];
$email=$_GET['email'];
$cpf=$_GET['cpf'];
$datans=$_GET['datans'];
$senha=$_GET['senha'];



$nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){ 
} else { 
    $nome = 'null';
}


$email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);




// PHP program to validate email using filter
 

/*


if (isset($_GET['nome'])) {
    if (!filter_input(INPUT_GET, 'nome', 
    FILTER_SANITIZE_SPECIAL_CHARS) === false) {
        echo("Nome valido<br>");
    } else {
        echo("Nome invalido<br>");
    }
}










if (isset($_GET["numcel"])) {
    if (!filter_input(INPUT_GET, "numcel", 
    FILTER_SANITIZE_NUMBER_INT) === false) {
        echo("Numero do celular valido");
    } else {
        echo("Numero do celular invalido");
    }
}


if (isset($_GET["email"])) {
    if (!filter_input(INPUT_GET, "email", 
    FILTER_SANITIZE_EMAIL) === false) {
        echo("Email Valido <br>");
    } else {
        echo("Email Invalido");
    }
}


if (isset($_GET["cpf"])) {
    if (!filter_input(INPUT_GET, "cpf", 
    FILTER_SANITIZE_NUMBER_INT) === false) {
        echo("cpf cadastro com sucesso! <br>");
    } else {
        echo("Erro ao cadastrar cpf");
    }
}


if (isset($_GET["datans"])) {
    if (!filter_input(INPUT_GET, "datans", 
    FILTER_SANITIZE_NUMBER_INT) === false) {
        echo("data de nascimento correta <br>");
    } else {
        echo("Erro ao cadastrar data de nascimento");
    }
}



if (isset($_GET["nome"])) {
    if (!filter_input(INPUT_GET, "nome", 
    FILTER_SANITIZE_SPECIAL_CHARS) === false) {
        echo("Nome valido<br>");
    } else {
        echo("Nome invalido<br>");
    }
}
*/
  















?>