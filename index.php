<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="home.js"></script>
    <title>Weebasse.gay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title"><h1>Weebasse.</h1><h1 class="dotgay">gay</h1></div>
    <div id="contain">
    <div class="logbox">
        <h2 id="statustxt">Login required.</h2>
        <form method="post" action="">
            <input required type="text" placeholder="Username" name="username">
            <input required type="password" placeholder="Password" name="password">
            <input class="btn" value="OK" type="submit">
        </form>
    </div>
    </div>
    <footer><p>Art by @ririkocafe (Twitter)</p><p style="right: 0;">(©) 2021</p></footer>
</body>
</html>