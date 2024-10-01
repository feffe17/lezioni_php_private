
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <!--- FORM IN CUI PRENDIAMO I VALORI IN INSERIMENTO E LI MANDIAMO
    AL FILE code.php -->

    <form action="code.php" method="post">
        <input type="text" name="Valore1"><br><br>
        <input type="text" name="Valore2"><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    <form action="code.php" method="post">
        <label>Numero 1</label>
        <input type="text" name="Numero1"><br><br>
        <label>Numero 2</label>
        <input type="text" name="Numero2"><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    <form action="code.php" method="post">
        <label>User</label>
        <input type="text" name="User"><br><br>
        <label>Pass</label>
        <input type="password" name="Pass"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>