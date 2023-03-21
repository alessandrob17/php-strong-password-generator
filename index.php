
<html>
<body>

<form action="index.php" method="GET">
Scegli lunghezza password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>
<?php

echo $_GET [$password];

?>
</p>
    
</body>
</html>