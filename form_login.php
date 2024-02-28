<?php
include"database.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <title>Belajar masbro</title>
</head>
<body>
<div class="div">
    <p class="tulisan-login">Login Dulu Masbro</p>
    <form action="">
        <label for="n">Masukan nama :</label>
        <input type="text" class="username" id="n" placeholder="Masukan Nama" ><br>
        <label for="p">Masukan password:</label>
        <input type="password" name="" id="p" placeholder="Masukan Password" >
        <input type="button" class="loginbtn" value="Submit">
    </form>
</div>
</body>
</html>