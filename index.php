<?php include_once("conexao.php");
session_start();
$select_produtos = "SELECT * FROM tb_produto";
$resultado_produtos = $conn->prepare($select_produtos);
// $row_produto = ($resultado_produtos);
$resultado_produtos->execute()
    ?>

<!DOCTYPE html>
<html>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>
<title>BRUTALTYPE</title>

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
                            <input class="form-control me-2" type="search" placeholder="Faça sua busca..."
                                aria-label="Search">
                            <div class="btnSearchNav"><button class="btn btn-danger" type="submit">Buscar</button>
                            </div>
                            <div class="iconsHeader">

                                <div class="personIcon" id="personIcon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="30" fill="currentColor" class="bi bi-person"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg> Login</div>

                                <div class="" id="localMallIcon"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
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

    <div class="belowHeader">
        <nav class="navbar navdoIndex">
            <div class="navegação">

                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link-disabled active" aria-current="page" href="lancamento.php">Lançamentos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-disabled dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Masculino</a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="#">Camisetas</a></li>
                            <li><a class="" href="#">Calças</a></li>
                            <li><a class="" href="#">Jaquetas</a></li>
                        </ul>

                    <li class="nav-item dropdown">
                        <a class="nav-link-disabled dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Feminino</a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="#">Camisetas</a></li>
                            <li><a class="" href="#">Calças</a></li>
                            <li><a class="" href="#">Jaquetas</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link-disabled active" aria-current="page" href="acessorios.php">Acessórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-disabled" aria-current="page" href="#">Promoções</a>
                    </li>

                    </li>
                    </li>
            </div>
        </nav>
    </div>
    </div>
    </nav>
    </div>


    <main>
        <div class="carouselConfig">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item w-100 active">
                        <img src="./images/1920.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item w-100">
                        <img src="./images/1920a.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item w-100">
                        <img src="./images/1920b.jpg" class="" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <h3 class="mt-3">Produtos Lançados
            <hr>
        </h3>

        <div class="vitrineProd ">

            <?php while ($row_produto = $resultado_produtos->fetch(PDO::FETCH_ASSOC)) { ?>
                <!-- <div class=""> -->
                <div class="card" style="width: 22rem; margin-bottom: 40px;">
                    <img class="card-img-top" src="./images/produto.jpg" alt="">
                    <div class="card-body">
                        <a href="./infoProduto.php?id=<?php echo $row_produto['ID_PROD'] ?>" class="card-title">
                            <h5>
                                <?php echo $row_produto['NOME_PROD']; ?>
                            </h5>
                        </a>
                        <p class="card-text limit">
                            <?php echo $row_produto['DESC_PROD']; ?>
                        </p>
                        <p>R$
                            <?php echo number_format($row_produto['VALOR_COMP_PROD'],2,',','.'); ?>
                        </p>
                        <a href="./carrinho.php?action=add&produto=<?php echo $row_produto['ID_PROD'] ?>"
                            class="card-title">
                            COMPRAR </a>
                    </div>
                </div>

            <?php } ?>
        </div>

        <!-- rodapé index -->
        <footer>
            <div class="footer-contain">
                <div class="ajudaSup col-md-2">
                    <h4>AJUDA E SUPORTE</h4>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Central de Atendimento</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="contato">
                    <h4>CONTATO</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>

            <p> BrutalType &copy; 2023 </p>
            <div class="develop">
                <button><a href="./desenvolvimento.html">Developing</a></button>
            </div>
        </footer>
    </main>

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
        window.location.href = "carrinho.php";
    }
    );
</script>

</html>