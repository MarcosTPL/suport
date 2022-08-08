
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamado | Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/atualizar-chamado-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <legend>atualizar_chamado</legend>
    
</head>

<body>
    <button onclick="voltar()">Voltar</button>
    <div class="box">
        
        <fieldset>
            <legend><b>Chamado do Cliente</b></legend>
            <br>
            <div class="card">
            <div class="inputBox">
                <label for="solicitacaoTxtBox" class="labelInput">Solicitacao</label>
                <textarea type="text" name="solicitacaoTxtBox" id="solicitacaoTxtBox" class="inputUserText" readonly maxlength="160">asdasdsad sa sadasdsad asdasd asdasdsa sadasd</textarea>
            </div>
            <div class="inputBox">
                <label for="solicitacao" class="labelInput"></label>
                <input type="text" name="solicitacao" id="solicitacao" class="inputUser" required value="2022-08-10 - 15:30 - Marcos Tulio">
            </div>
            <br>
            </div>
            <div class="card">
            <div class="inputBox">
                <label for="solicitacaoTxtBox" class="labelInput">Solicitacao</label>
                <textarea type="text" name="solicitacaoTxtBox" id="solicitacaoTxtBox" class="inputUserText" readonly maxlength="160">asdasdsad sa sadasdsad asdasd asdasdsa sadasd</textarea>
            </div>
            <div class="inputBox">
                <label for="solicitacao" class="labelInput"></label>
                <input type="text" name="solicitacao" id="solicitacao" class="inputUser" required value="2022-02-05 - 08:12 - Marcos Tulio">   
            </div>
            <br>
            </div>
        </fieldset>

        <input type="submit" name="submit" id="submit" onclick="voltar()" value="Voltar">

    </div>
</body>

<script src="js/chamado.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>