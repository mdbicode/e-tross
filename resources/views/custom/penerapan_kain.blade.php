<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/custom/create/penerapan-kain" method="POST">
        @csrf
        <h1>Silahkan Pilih Penerapan Kain</h1>
        <input type="radio" name="penerapan_kain" value="model1">Model 1 <br>
        <input type="radio" name="penerapan_kain" value="model2">Model 2 <br>
        <input type="radio" name="penerapan_kain" value="model3">Model 3 <br>
        <br>

        <input type="submit" value="Buatkan">
    </form>
</body>
</html>
       