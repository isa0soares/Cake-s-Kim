<?php
    
    $pdo = new PDO('mysql:host=localhost:3307;dbname=test','root','usbw');

    $sql = $pdo->prepare("SELECT * FROM `sistema1` WHERE email=? AND senha=?");
    
    $sql->execute(array($_POST['user'],$_POST['senha']));

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        session_start();
        $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha não encontrados!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    } else {
        session_start();
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=principal.php'/>";
    }
?> 