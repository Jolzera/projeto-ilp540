<!DOCTYPE HTML>
<html>
<head lang="pt-br">
    <meta charset="utf-08">
	<meta name="viewport" content="width=divice-widtth, initial-scake=1">
	<title>Shop express</title>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body id="b" class="fundo">
    <header>
        <a class="navbar-brand" href="#">
            <img src="ShopExpresM.png" id="flu" alt="ShopExpres" width="200" height="200" class="img-fluid">
    </header>
    <main>
        <div>
            <h1 id="b">Quero me cadastrar</h1>
            <form class="needs-validation" novalidate action="Conecta.php" method="">
                <div class="form-group">
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Nome" type="text" name="usuario" id="usuario" value="" required>
                        <div class="invalid-feedback">
                            Por favor, informe um nome.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <!------<label for="validationCustom01">Email</label>!---->
                        <input class="form-control" placeholder="Email*" type="email" name="email" id="validationCustom01" value="" required>
                        <div class="invalid-feedback">
                            Por favor, informe um email corretamente.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Celular" type="text" name="celular" id="celular" value="" required>
                        <div class="invalid-feedback">
                            Por favor, informe telefone.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Senha*" type="password" name="senha" id="senha" value="" required>
                        <div class="invalid-feedback">
                            Por favor, informe uma senha.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Confirmacao de senha*" type="password" name="senha" id="confirma��o_senha" value="" required>
                        <div class="invalid-feedback">
                            Por favor, voc� precisa confirmar sua senha.
                        </div>
                    </div>
                </div>
                <button id="bc" type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar!!</button>
            </form>
        </div>
    </main>

    <script src="Script1.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
