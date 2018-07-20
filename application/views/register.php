<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/style.css">
    <title>register</title>
</head>
<body>
<div class="container-fluid">
    <img src="github-sociocon.png" alt="log" class="img img-responciverounded mx-auto d-block logo">
    <div class="col-lg-4 mx-auto">
        <form action="" method="POST">
                <h1> Register Her</h1>
                <label for="">Nom</label>
                <input type="text" class="form-control input-lg" name="name" placeholder="Ici votre nom">
                <label for="">Prenom</label>
                <input type="text" class="form-control" name="last_name" placeholder="votre prenom">
                <label for="">Email</label>
                <input type="text" class="form-control" name="mail" placeholder="ex : rakoto@mail.com">
                <label for="">Mot de passe</label>
                <input type="password" class="form-control" name="pwd" placeholder="utiliser des chiffre et des lettre">
                <label for="">Confirmer</label>
                <input type="password" class="form-control" name="pwd_conf" placeholder="retapper le mot de passe">
                <input type="submit" class="btn btn-primary  mt-2">
        </form>
    </div>
</div>
<script src="bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>