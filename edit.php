<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Processo Seletivo - Desenvolvedor Web</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.3.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Processo Seletivo - Desenvolvedor Web</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./">In&iacute;cio</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="main" class="container-fluid">

            <h3 class="page-header">Editar Item</h3>

            <form action="#" id="contactForm" style="margin-left: 80px; margin-bottom: 80px">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="usuario_id" placeholder="Digite o valor">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_nome" placeholder="Digite o valor">     
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_email" placeholder="Digite o valor">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_telefone" placeholder="Digite o valor">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Logradouro</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_logradouro" placeholder="Digite o valor">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Número</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_numero" placeholder="Digite o valor">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Complemento</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_complemento" placeholder="Digite o valor">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Bairro</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_bairro" placeholder="Digite o valor">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Cep</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_cep" placeholder="Digite o valor">
                    </div>
                </div>

                <div class="row">
                    
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Cidade</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_cidade" placeholder="Digite o valor">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Estado</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario_estado" placeholder="Digite o valor">
                    </div>                
                </div>
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="./" class="btn btn-default">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>