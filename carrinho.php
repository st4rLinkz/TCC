<?php include_once "conexao.php";
session_start();

$id_prod = (int) $_GET['adicionar'];
$select_produtos = "SELECT * FROM tb_produto WHERE ID_PROD = '$id_prod'";
$resultado_produtos = $conn->prepare($select_produtos);
$resultado_produtos->execute();
$row_produto = $resultado_produtos->fetch(PDO::FETCH_ASSOC);
$qtd_disponivel = 0;
$qtd_select = 0;
?>

<!-- Verifica sessão existente ou cria uma nova sessão -->
<?php
if ($row_produto > 0) {
    if (isset($_SESSION['carrinho'][$id_prod])) {
        echo '<script>alert("PRODUTO JÁ ESTAVA ADICIONADO");</script>';
        $qtd_disponivel = $row_produto['QTD_PROD'];

        $_SESSION['carrinho'][$id_prod]['quantidade']++;
        $qtd_select = $_SESSION['carrinho'][$id_prod]['quantidade'];
    } else {
        echo '<script>alert("SEU PRODUTO FOI ADICIONADO AO CARRINHO!");</script>';
        $_SESSION['carrinho'][$id_prod] = array(
            'quantidade' => 1,
            'nome' => $row_produto['NOME_PROD'],
            'preco' => $row_produto['VALOR_COMP_PROD'],
            'desc' => $row_produto['DESC_PROD']
        );
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./cadastro.php">
    <link rel="stylesheet" href="./conexao.php">
    <link rel="stylesheet" href="./db_brutaltype.sql">
    <link rel="stylesheet" href="./cadcontrole.php">
    <link rel="stylesheet" type="text/css" href="./css/Estilo.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="./images/icons/BrutalTypeIcon_resized.jpg" type="image/jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Carrinho</title>
</head>

<style>
    body {
        padding: 0;
        margin: 0;
        background-color: whitesmoke;
    }

    section {
        background-color: white;
        border-radius: 10px;
        margin: 10px;
        padding: 10px;
        width: 100%;
    }

    section img {
        max-width: 100%;
        margin: 5px;
        padding: 5px;
    }

    div.intro {
        display: flex;
        flex-direction: row;
        max-width: 100%;
        align-items: center;
    }


    div.produtos {
        display: flex;
        flex-direction: row;
    }


    h2 {
        font-weight: bold;
    }

    div.nomeprod {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-transform: capitalize;
    }

    div.descprod {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-transform: capitalize;
    }

    div.qtdprod {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-transform: capitalize;
    }

    div.precoprod {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-transform: capitalize;
    }

    div.arrows {
        display: flex;
        flex-direction: row;
        gap: 5px
    }

    div.resumo {
        /*    background-color: white;
        display: grid;
        flex-direction: column;
        border-radius: 10px;
        width: 20%;
        align-items: center;
        grid-auto-flow: ;
        margin-right: 5px; */
        margin: 10px;
        padding: 10px;
    }

    p {
        font-weight: bold
    }

    a.removeprod {
        background-color: crimson;
        color: black;
        border-radius: 5px;
        text-decoration: none;
    }

    div.limit {
        overflow: hidden;
        /* remove o estouro do elemento */
        text-overflow: ellipsis;
        /* adiciona “...” no final */
        display: -webkit-box;
        -webkit-line-clamp: 5;
        /* quantidade de linhas */
        -webkit-box-orient: vertical;
        /* conteúdo será apresentado verticalmente */
    }

    /* estilização das "flechas" de soma e subtração de quantidade */
    a {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
    }

    a:hover {
        background-color: #ddd;
        color: black;
    }

    .previous {
        background-color: grey;
        color: white;
    }

    .next {
        background-color: grey;
        color: white;
    }

    .round {
        border-radius: 50%;
    }

    /* estilização das "flechas" de soma e subtração de quantidade */
</style>

<body>
    <div id="titulo" class="">
        <header>
            <nav class="brutaltypenav">
                <div class="searchbar-bg">
                    <div class="imagesHeader" id="imagesHeader">
                        <div><img class="iconbrutaltype" src="./images/icons/brutaltype.jpg"></div>
                        <div class="btImg" id="imagesHeader">
                            <picture><img src="./images/icons/brutaltypeImg.jpg" alt=""></picture>
                        </div>
                    </div>
                    <div class="searchbar">
                        <form class="d-flex w-100 p-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Faça sua busca..." aria-label="Search">
                            <div class="btnSearchNav"><button class="btn btn-danger" type="submit">Buscar</button>
                            </div>
                            <div class="iconsHeader">

                                <div class="personIcon" id="personIcon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg> Login</div>

                                <div class="" id="localMallIcon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
    </nav>
    </header>
    </div>

    <div class="col-md-12 d-flex">

        <section class="">
            <div class="intro">
                <h2 class="col-md-8">PRODUTOS ADICIONADOS</h2>
                <button class="btn btn-outline-danger" id="removeAll" name="removeAll" type="submit" onclick="limpar('clear')">LIMPAR CARRINHO</button>
            </div>
            <hr>

            <div class="container produtos">
                <?php foreach ($_SESSION['carrinho'] as $key => $value) { ?>
                    <p>
                    <div class="col-md-2">
                        <img src="./images/produto.jpg" alt="">
                    </div>
                    </p>
                    <div class="col-md-2 nomeprod" id="nome_produto">
                        <p>NOME</p>
                        <?php
                        echo $value['nome'];
                        ?>
                    </div>
                    <div class="col-md-2 descprod" id="desc_produto">
                        <p>DESCRIÇÃO</p>
                        <?php
                        echo $value['desc'];
                        ?>
                    </div>
                    <div class="col-md-4 qtdprod" id="qtd_produto">
                        <p>QUANTIDADE</p>
                        <?php
                        echo $value['quantidade'];
                        /* echo '<a href="#" class="previous round">&#8249;</a>';
                        echo '<a href="#" class="next round">&#8250;</a>' */
                        ?>
                        <div class="arrows">
                            <?php
                            echo '<a href="#" class="previous round">&#8249;</a>';
                            echo '<a href="#" class="next round">&#8250;</a>'
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2 precoprod" id="preco_produto">
                        <p>PREÇO</p>
                        <?php
                        $preco_prod = $value['preco'];
                        $preco_final = ($qtd_select * $preco_prod);

                        echo $preco_final;
                        ?>
                    </div>
                <?php } ?>
        </section>

        <div class="resumo">
            <div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">RESUMO</h5>
                        <p class="card-text">Valor dos produtos:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Frete:</li>
                        <li class="list-group-item">Total à prazo:</li>
                        <li class="list-group-item">Valor à vista:</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">IR AO PAGAMENTO</a>
                        <a href="#" class="card-link">CONTINUAR COMPRANDO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

<script>
    const imagem = document.getElementById('imagesHeader');
    imagem.addEventListener('click', () => {
            window.location.href = "index.php";
        }

    );

    const person = document.getElementById('personIcon');
    person.addEventListener('click', () => {
            window.location.href = "cadastro.php";
        }

    );

    const localMall = document.getElementById('localMallIcon');
    localMall.addEventListener('click', () => {
        window.location.href = "carrinho.php?adicionar=<?php echo $_GET['adicionar']?>  ";
    });


</script>

</html>