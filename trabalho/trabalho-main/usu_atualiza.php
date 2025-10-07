<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $sql = "UPDATE usuario SET nome=?,celular=?,cpf=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if (!$stmt) {
        echo "Erro na atualização: ".$conn->error;
    }
    $stmt->bind_param('sssi', $nome,$celular,$cpf,$id);
    $stmt->execute();
    $conn->close();
    echo "<script language='javascript' type='text/javascript'>
    window.location.href='usu_sejuc.php';
    </script>";
?>