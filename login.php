<?php
    $email = $senha = $check = "";
    if(isset($_COOKIE["email"])){
        $email = $_COOKIE["email"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"])){
        $senha = $_COOKIE["senha"];
    }
?>

<!DOCTYPE HTML>
<html>
<head lang="pt-br">
    <meta charset="utf-08">
	<meta name="viewport" content="width=divice-widtth, initial-scake=1">
	<title>Shop express</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body id="b" class="fundo">
    <header>
        <div id="flu">
            <a class="navbar-brand">
                <img src="ShopExpresM.png" alt="ShopExpres" width="150" height="200" class="img-fluid">
        </div>
    </header>
    <main>
        <div>
            <h1 id="b">Ja tenho cadastro</h1>
            <form id="b" class="needs-validation" novalidate action="process.php" method="post">
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" required>
                            <div class="invalid-feedback">
                                Por favor, informe seu Email corretamente
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" id="senha" value="<?= $senha ?>" required>
                        <div class="invalid-feedback">
                            Por favor, coloque sua senha corretamente
                        </div>
                    </div>
                </div>
                <div>
                    <input type="checkbox" name="salvar" value="<?= $check ?>"> Deseja salvar senha
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" id="bc" class="btn btn-primary btn-lg" value="Entrar">
                    <input type="submit" href="cadastro.php" id="bc" class="btn btn-primary btn-lg" value="Cadastrar">
                    
                </div>
                <div>
                    <br>
                    <p>Quero acessar com minhas redes sociais</p>
                    <button type="button" class="btn btn-light" id="bu"> Entrar com o FACEBOOK</button> <button type="button" class="btn btn-light" id="em"> Entrar com o GOOGLE</button>
                </div>
            </form>
        </div>
    </main>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>