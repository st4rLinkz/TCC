<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once('conexao.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="images/brutaltype.png" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="" action="cadcontrole.php" method="POST">
                        <h2>Cadastrar </h2>



                        <div class="form-group form-input">
                            <input type="text" name="email" id="email" value="" required />
                            <label for="email" class="form-label">email</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="text" name="nome" id="nome" value="" required />
                            <label for="nome" class="form-label">Nome</label>
                        </div>




                        <div class="form-group form-input">
                            <input type="number" name="cpf" id="cpf" value="" required />
                            <label for="cpf" class="form-label">cpf</label>

                        </div>


                        <div class="form-group form-input">
                            <input type="number" name="numcel" id="numcel" value="" required />
                            <label for="numcel" class="form-label"> Número celular</label>
                        </div>


                        <div class="form-group form-input">
                            <input type="date" name="datans" id="datans" value="" required />
                            <label for="datans" class="form-label"> Data de nascimento</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="senha" id="senha" value="" required />
                            <label for="senha" class="form-label">senha</label>


                        </div>





                        <div class="form-submit">
                            <input type="submit" value="cadastrar" class="submit" name="SendCadUser" id="SendCadUser" />
                            <a href="./Login_v3/login.php" class="vertify-booking">login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>





</body>

</html>