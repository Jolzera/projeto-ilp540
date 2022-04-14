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
            <a class="navbar-brand" href="#">
                <img src="ShopExpresM.png" alt="ShopExpres" width="200" height="200" class="img-fluid">
        </div>
    </header>
    <main>
        <div>
            <h1 id="b">Ja tenho cadastro</h1>
            <form id="b" class="needs-validation" novalidate>
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" value="" required>
                            <div class="invalid-feedback">
                                Por favor, informe seu Email corretamente
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" value="" required>
                        <div class="invalid-feedback">
                            Por favor, coloque sua senha corretamente
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="logado.php"><button type="button" id="bc" class="btn btn-primary btn-lg ">Entrar</button></a> <!---talves colocar "btn-block" na casse dos botões-->
                    <a href="cadastro.php"><button type="button" id="bc" class="btn btn-primary btn-lg">Cadastrar</button></a>
                </div>
                <div>
                    <br>
                    <p>Quero acessar com minhas redes sociais</p>
                    <button type="button" class="btn btn-light" id="bu"> Entrar com o FACEBOOK</button> <button type="button" class="btn btn-light" id="em"> Entrar com o GOOGLE</button>
                </div>
            </form>
        </div>
    </main>


    <script src="Script1.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
