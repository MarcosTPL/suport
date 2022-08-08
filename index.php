<?php
    include_once('config.php');

    $sql = "SELECT * FROM clientes ORDER BY id";

    $result = $conexao->query($sql);

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/edit_style.css">
</head>

    
<div class="box">
        <tbody>
            <input type="text" class="box-search" placeholder="Pesquisar Clientes" id="pesquisar">

            <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome </th>
                <th scope="col">Chamado</th>
                <th scope="col">Urgencia</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ultima Atualização</th>
                <th scope="col">...</th>
                <th scope="col"><button onclick="chamado()">+</button></th>
                <th scope="col"><button >?</button></th>
            </tr>
        </thead>
        <tbody>
                <?php

                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . "#". $user_data['chamado'] . "</td>";
                    echo "<td>" . $user_data['urgencia'] . "</td>";
                    echo "<td>" . $user_data['descricao'] . "</td>";
                    echo "<td>" . $user_data['estatus'] . "</td>";
                    echo "<td>" . $user_data['ultima_atualizacao'] . "</td>";
                    echo "<td>".
                                "<span class='btn btn-sm btn-primary' onclick='atualizar($user_data[id])' data-bs-toggle='modal' data-bs-target='#editModal'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-clockwise' viewBox='0 0 16 16'>
                                        <path fill-rule='evenodd' d='M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z'/>
                                        <path d='M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z'/>
                                    </svg>
                                </span>" 
                                .
                                "<span class='btn btn-sm btn-primary' onclick='editar($user_data[id])' data-bs-toggle='modal' data-bs-target='#editModal'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                    </svg>
                                </span>" . 
                          "</td>";
                    echo "<td>"
                                . "</td>";
                    echo "<tr>";
                    }
                ?>
        </tbody>

            </table>
    </tbody>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
<script src="js/edit.js"></script>



</html>