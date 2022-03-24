<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>ShopExpress</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col"><a class="navbar-brand" href="#"><img src="ShopExpresM.png" width="100" height="100">ShopExpres</a></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="col">  <a class="nav-link active" aria-current="page" href="#">Home</a></div>
                        </li>

                        <li class="nav-item">
                            <div class="col"><a class="nav-link" href="#">Features</a></div>
                        </li>
                        <li class="nav-item">
                            <div class="col"><a class="nav-link" href="index.html">Sair</a></div>
                        </li>
                    </ul>
                    <div class="row">
                        <form class="d-flex">
                            <div class="col"><input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search"></div>
                            <div class="col"><button class="btn btn-outline-success" id="bc" type="submit">Procurar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1>Alterar dados</h1>
        <form id="b">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email*</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha*</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div>
                <button type="button" id="bc" class="btn btn-primary btn-lg btn-block">Entrar</button>
            </div>
            <div>
                <br>
                <button id="bc" class="btn btn-primary btn-lg btn-block" role="button">Cadastrar</button>
            </div>
            <div>
                <br>
                <p>Quero acessar com minhas redes sociais</p>
                <button type="button" class="btn btn-light" id="bu"> Entrar com o FACEBOOK</button> <button type="button" class="btn btn-light" id="em"> Entrar com o GOOGLE</button>
            </div>
        </form>

    </main>








    <footer class="fixed-bottom" id="b">
        <p id="bcb">Diretos reservados a jonathan teixeira rodrigues</p>
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
