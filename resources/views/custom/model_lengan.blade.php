<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/custom/create/lengan" method="POST">
        @csrf
        <h1>Silahkan Pilih Model Panjang Lengan</h1>
        <input type="radio" name="lengan" value="panjang"> Panjang <br>
        <input type="radio" name="lengan" value="pendek"> Pendek <br>
        <br>
        <input type="submit" value="Selanjutnya">
    </form>
</body>
</html>