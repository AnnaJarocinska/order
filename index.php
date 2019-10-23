<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    label{
        display:block;
        margin:10px;
    }
        </style>
</head>
<body>
<h1>Zamówienie</h1>
<form action="order.php" method="post">
<label> Przedmiot 1 <input type="text" name="item1"/></label>
<label> Przedmiot 2 <input type="text" name="item2"/></label>
<label> Przedmiot 3 <input type="text" name="item3"/></label>
<input type="submit"/ value="Potwierdź zamówienie">
</form>
<?php


?>
    
</body>
</html>