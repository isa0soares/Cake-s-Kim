<?php
    session_start();
    print_r($_POST);

    if ($_POST['email'] == $_POST['conf'] AND $_POST['senha'] == $_POST['confsenha']) {
        
        $pdo = new PDO('mysql:host=localhost:3307;dbname=test','root','usbw');

        $sql = $pdo->prepare("INSERT INTO `sistema1` VALUES (null,?,?,?,?,?,?,?,?,?,?,?)");
    
        $sql->execute(array($_POST['nomecompleto'],
                            $_POST['apelido'],
                            $_POST['datanasc'],
                            $_POST['cpf'],
                            $_POST['endereco'],
                            $_POST['numero'],
                            $_POST['cidade'],
                            $_POST['estado'],
                            $_POST['email'],
                            $_POST['senha'],
                            'vazio'                      
        ));

        $_SESSION['ok'] = "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";

    } else {
        $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Dados não conferem!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=cadastrar.php'/>";

        
    }
    
?>