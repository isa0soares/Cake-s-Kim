<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake's KimJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="bg-success-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/foto.png" alt="" width="50px"></a>
        </div>
    </nav>
    <body class="bg-success-subtle">

</body>

    <div class="container mt-4 text-center">
        <h2>Cadastro</h2>

<br/>
        <form action="bd.php" method="post">

<div class="row py-2">
<div class="row g-12">
  <div class="col-md-6 ">
    <input class="form-control" type="text" name="nomecompleto" id="" placeholder="Nome completo" required>
  </div>
   <div class="col-md-6 ">
     <input class="form-control" type="text" name="apelido" id="" placeholder="Apelido" required>
   </div>
<div>

<br/>
    <div class="row py-2">
    <div class="row g-12">
      <div class="col-md-6">
       <input class="form-control" type="date" name="datanasc" id="" required>
      </div>
    <div class="col-md-6 ">
      <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" required>
    </div>
    </div>
    </div>
<br/>
    <div class="row py-2">
    <div class="row g-12">
      <div class="col md-3">
      <input class="form-control" type="text" name="endereco" id="" placeholder="Endereço" required>
      </div>
      <div class="col-md-3 ">
        <input class="form-control" type="text" name="numero" id="" placeholder="Número" required>
      </div>
      <div class="col md-3">
      <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
      </div>
      <div class="col md-3">
      <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
      </div>
    </div>
    </div>

<br/>

    <div class="row py-2">
    <div class="row g-12">
      <div class="col-md-6">
        <label class="form-label" for="email">Digite o e-mail de usuário</label>
         <input class="form-control" type="email" name="email" id="email" required>
       </div>
        <div class="col-md-6">
         <label class="form-label" for="conf">Confirme o e-mail de usuário</label>
         <input class="form-control" type="email" name="conf" id="conf" required>
        </div>
          
<br/>

   
      <div class="col-md-6">
       <label class="form-label" for="senha">Digite a senha</label>
       <input class="form-control" type="password" name="senha" id="senha" required>
    </div>
    <div class="col-md-6">
     <label class="form-label" for="confsenha">Confirme a senha</label>
     <input class="form-control" type="password" name="confsenha" id="confsenha" required>         
    </div>
          
   <br/>
   
    <div class="row py-5">
    <div class="row g-2">
    <input class="btn btn-outline-light mb-5 mt-2" type="submit" value="Cadastrar Usuário">
    

        </form>

        <?php

            if (!empty($_SESSION['ok'])) {
                echo $_SESSION['ok'];
                unset($_SESSION['ok']);
            }

        ?>
  </div> 