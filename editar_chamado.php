<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado</title>
    <link rel="stylesheet" type="text/css" href="css/editar_chamado-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body>
    <button onclick="voltar()">Voltar</button>
    <div class="box">
        <form id="registro" action="register.php" method="POST">
            <fieldset>
                <legend><b>Chamado Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" readonly value="Nome Solicitante">
                    <label for="nome" class="labelInput"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" readonly value="Email Solicitante">
                    <label for="email" class="labelInput"></label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="dropdown" class="labelInput">Motivo</label>
                    <br>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Escolha um opção
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dúdvida</a></li>
                                        <li><a href="#">Reclamação</a></li>
                                        <li><a href="#">Solicitação</a></li>
                                        <li><a href="#">Financeiro</a></li>
                                        <li><a href="#">Sugestão</a></li>
                                        <li><a href="#">Atendimento pós-vendas</a></li>
                                        <li><a href="#">Outros</a></li>
                                    </ul>
                        </div>
                </div>
                <br>
                <div class="inputBox">
                    <label for="dropdown" class="labelInput">Departamento</label>
                    <br>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Escolha um opção
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Comercial</a></li>
                                        <li><a href="#">Financeiro</a></li>
                                        <li><a href="#">Suporte Tecnico</a></li>
                                    </ul>
                        </div>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="solicitacao" id="solicitacao" class="inputUser" required>
                    <label for="solicitacao" class="labelInput">Solicitacao</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <textarea type="text" name="solicitacao" id="solicitacao" class="inputUserText" require maxlength="160"></textarea>
                    <label for="solicitacao" class="labelInput">Solicitacao</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="file" class="form-control-file">
                </div>
                <br>
                <div class="inputBox">
                    <div class="dropdown">
                    <img src="#">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Escolha um opção
                            <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Não Urgente</a></li>
                                    <li><a href="#">Pouco Urgente</a></li>
                                    <li><a href="#">Urgente</a></li>
                                    <li><a href="#">Muito Urgente</a></li>
                                </ul>
                    </div>
                <br>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

<script src="js/edit.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>