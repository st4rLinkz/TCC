<?php


class login {

    function autentica($nome, $senha) {
        $query = "SELECT count(*) as conectado FROM tb_usuario WHERE email=:email_usuario AND senha_usuario=:senha_usuario";
        $conexap = Conexao::pegarConexao();
        $stmt = $conexap->prepare($query);
        $stmt->bindValue(':p_usu_mome', $nome);
        $stmt->bindValue(':p_usu_senha', $senha);
        $stmt->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result->conectado;
    }

    function logout(){
        $_SESSION["conectado"]='0'; 
        $_SESSION["nome"]='';
    }

}




?>







