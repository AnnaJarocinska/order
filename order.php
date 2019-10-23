<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$suma = $item1 + $item2 + $item3;

echo<<<END
<h1>Podsumowanie zamówienia</h1>

<table>
<tr>
<td>Zamówiony przedmiot</td>
<td>Ilość</td>
</tr>
<tr>
<td>Przedmiot 1</td>
<td>$item1</td>
</tr>
<tr>
<td>Przedmiot 2</td>
<td>$item2</td>
</tr>
<tr>
<td>Przedmiot 3</td>
<td>$item3</td>
</tr>
<tr>
<td>Ilość zamówionych przedmiotów</td>
<td>$suma</td>
</tr>
</table>
<a href="index.php">Powrót<a/>

END;
?>
    
</body>
</html>