<?php
include("Conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

    $aux = "disable";
    $id = $_SESSION["id_usuario"];
    
    try{
        $sql = "SELECT * FROM `usuario` WHERE `id` = '$id'";
        $res = $conn->query($sql)->fetchAll();
        if(count($res) > 0)
        {
            foreach($res as $row)
            {
                $nome = $row['nome'];
                $email = $row['email'];
                $celular = $row['celular'];
                $senha = $row['senha'];
            }
        }
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;

    
}
else {
    $nome = "";
    $email = "";
    $celular = "";
    $senha = "";
    $aux = "";
}

?>

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
        <a class="navbar-brand">
            <img src="ShopExpresM.png" id="flu" alt="ShopExpres" width="200" height="200" class="img-fluid">
    </header>
    <main>
        <div>
            <h1 id="b">Quero me cadastrar</h1>
            <form class="needs-validation" novalidate action="process_cadastro.php" method="post">
                <div class="form-group">
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Nome" type="text" name="nome" id="nome"  required>
                        <div class="invalid-feedback">
                            Por favor, informe um nome.
                        </div>
                        
                    </div>
                    <div class="form-group col-sm-12">
                        <!------<label for="validationCustom01">Email</label>!---->
                        <input class="form-control" placeholder="Email*" type="email" name="email" id="validationCustom01"  required>
                        <div class="invalid-feedback">
                            Por favor, informe um email corretamente.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Celular" type="text" name="celular" id="celular"  required>
                        <div class="invalid-feedback">
                            Por favor, informe telefone.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Senha*" type="password" name="senha" id="senha"  required>
                        <div class="invalid-feedback">
                            Por favor, informe uma senha.
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input class="form-control" placeholder="Confirmacao de senha*" type="password" name="senha" id="confirma��o_senha"  required>
                        <div class="invalid-feedback">
                            Por favor, voc� precisa confirmar sua senha.
                        </div>
                    </div>
                </div>
                <button id="bc" type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar!!</button>
                <?php
                    if(isset($_SESSION["id_usuario"])){

                        $aux = "disable";
                        $id = $_SESSION["id_usuario"];
                        echo("<input type='submit' value='excluir' id='bc' class='btn btn-primary btn-lg btn-block'><a href='logout.php?id=$id'></a>"); 
                    }
                ?>
            </form>
        </div>
    </main>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
