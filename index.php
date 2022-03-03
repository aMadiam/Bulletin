<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bulletin Board Entry</h1>
<form action="process.php" method="POST">
    <p>Subject: </p><input type="text" name="subject" class="subject">
    <br>
    <p>Details:</p>
    <textarea name="details" rows="3" cols="35"></textarea>
    <br>
    <input type="submit" name="add" value="ADD" class="add">
    <a href="main.php">
    <input type="button" name="skip" value="SKIP" class="skip"> 
    </a>
</form>
</body>
</html>