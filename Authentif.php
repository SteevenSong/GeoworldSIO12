<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
<?php require_once 'inc/connect-db.php' ;
require_once 'header.php'; 
?>
<form class="carre" action="loginGeoworld.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="img-fluid" src="images/LOGO.JPG" >
    <div class="login">
Votre utilisateur : <br /><input  type="text" name="login"><br />
</div>
<br />
<div class="pwd">
Votre mot de passe : <br /><input type="password" name="pwd"><br />
</div>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="submit" type="submit" value="Connexion">
</form>
 <form action="Inscrip.php" methode="post">
    <div  class="carre2" >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
<p class="ins">Pas encore inscrit ? Cliquez ici<input class="inscription" type="submit" value="Inscription"></p>
</div>
    </form>
    <?php
require_once 'javascripts.php';
//require_once 'footer.php';
?>
</body>
