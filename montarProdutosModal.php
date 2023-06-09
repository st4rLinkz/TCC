<?php
/* include_once 'conexao.php';

$produtoId = $_GET['produtoId'];

$stmGetProduto = $conexao->query("SELECT ID_PROD, NOME_PROD, QTD_PROD, VALOR_COMP_PROD FROM TB_PRODUTO WHERE ID_PROD = $produtoId");
while ($dados = $stmGetProduto->fetch_assoc()) {
    $idProduto = $dados['ID_PROD'];
    $nomeProduto = $dados['NOME_PROD'];
    $qtdeProduto = $dados['QTD_PROD'];
    $valorProduto = $dados['VALOR_COMP_PROD'];
} */

include_once 'conexao.php';

$produtoId = $_GET['produtoId'];

$stmt = $conexao->prepare("SELECT ID_PROD, NOME_PROD, QTD_PROD, VALOR_COMP_PROD FROM TB_PRODUTO WHERE ID_PROD = ?");
$stmt->bind_param("i", $produtoId);
$stmt->execute();

$stmGetProduto = $stmt->get_result();

if ($stmGetProduto->num_rows > 0) {
    while ($dados = $stmGetProduto->fetch_assoc()) {
        $idProduto = $dados['ID_PROD'];
        $nomeProduto = $dados['NOME_PROD'];
        $qtdeProduto = $dados['QTD_PROD'];
        $valorProduto = $dados['VALOR_COMP_PROD'];
    }
} else {
    echo "Nenhum produto encontrado";
}

$stmt->close();
$conexao->close();

?>