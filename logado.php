﻿<?php
include("authentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Expres</title>
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopExpress</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>

<body class="fundo">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" id="branco"><img src="ShopExpresM.png" width="100" height="100">ShopExpres</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Meus dados</a>
                    </li>        
                    <li class="nav-item" id="link"> 
                        <a class="nav-link" href="Logout.php" >Sair</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Procurar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="bc" type="submit">Procurar</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="h1">Logado</h2>
    </main>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>