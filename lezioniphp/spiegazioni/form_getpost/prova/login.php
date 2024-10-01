<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
<!--- crea una form di login --->
<form action="home.php" method="post">
    <label>Username</label>
    <input type="text" name="Username"><br><br>
    <label>Password</label>
    <input type="password" name="Password"><br><br>
    <input type="submit" value="Submit">
</form>
<hr/>
<form action="home.php" method="get">
    <label>Numero1</label>
    <input type="number" name="Numero1"><br><br>
    <label>Numero2</label>
    <input type="number" name="Numero2"><br><br>
    <label>Numero3</label>
    <input type="number" name="Numero3"><br><br>
    <input type="submit" value="Avanti">
</form>
</body>
</html>