<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "gerenciar_chamados_matheusV";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn -> connect_error){
        die("Falha na conexão : ". $conn -> connect_error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencar Chamados</title>
</head>
<body>     
    <h1>TELA DE GERENCIAMENTOD DE CHAMADO</h1>

    <H2>VER CHAMADOS</H2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>descicao_problema</th>
            <th>criticidade</th>
            <th>status_chamados</th>
            <th>data_abertura</th>
            <th>fk_cliente</th>
        </tr>
        <?php while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['descicao_problema']; ?></td>
                <td><?php echo $row['criticidade']; ?></td>
                <td><?php echo $row['status_chamados']; ?></td>
                <td><?php echo $row['data_abertura']; ?></td>
                <td><?php echo $row['fk_cliente']; ?></td>
                    <a href="index.php?delete=<?php echo $row['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>