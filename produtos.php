<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Produtos</title>
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">

                <div class="booking-form">
                    <form id="cadproduto" action="prodcontrole.php" method="POST">
                        <h2>Cadastrar </h2>





                        <div class="form-group form-input">
                            <input type="text" name="nomeprod" id="nomeprod" value="" required />
                            <label for="nomeprod" class="form-label"> Nome produto</label>
                        </div>




                        <div class="form-group form-input">
                            <input type="number" name="qtd" id="qtd" value="" required />
                            <label for="qtd" class="form-label">Quantidade </label>

                        </div>


                        <div>
                            <textarea name="descprod" id="descprod"></textarea>
                            <label for="descprod" class="form-label"> Descricação produto</label>
                        </div>

                        <div>
                            <input type="number" name="precoprod" id="precoprod" />
                            <label for="precoprod" class="form-label">Preço Produto</label>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="cadastrar" class="submit" name="SendCadprod" id="SendCadprod" />

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>