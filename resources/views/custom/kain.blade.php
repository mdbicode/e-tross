<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Kain Troso</title>
    <style>
        /* Style untuk gambar agar dapat diklik */
        .fabric-choice {
            cursor: pointer;
        }
        .fabric-choice input[type="radio"] {
            display: none; /* Sembunyikan radio button asli */
        }
        .fabric-choice img {
            width: 150px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
            border: 2px solid transparent;
        }
        .fabric-choice input[type="radio"]:checked + img {
            border-color: #007bff; /* Warna border ketika dipilih */
        }
    </style>
</head>
<body>
    <form action="/custom/create/kain" method="POST">
        @csrf
        <h1>Silahkan Pilih Kain Troso</h1>
        
        <!-- Pilihan gambar -->
        <label class="fabric-choice">
            <input type="radio" name="kain" value="model1">
            <img src="https://cdn.oneesports.id/cdn-data/sites/2/2022/03/Naruto-Uzumaki.webp" alt="Model 1">
        </label>
        
        <label class="fabric-choice">
            <input type="radio" name="kain" value="model2">
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fnaruto-official.com%2Fen&psig=AOvVaw25MLVzttAkUOm7P0qggu-D&ust=1719817029079000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCOCso-rfgocDFQAAAAAdAAAAABAQ" alt="Model 2">
        </label>
        
        <label class="fabric-choice">
            <input type="radio" name="kain" value="model3">
            <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/13/manga-naruto-1.webp?w=700&q=90" alt="Model 3">
        </label>
        
        <br><br>
        <input type="submit" value="Selanjutnya">
    </form>
</body>
</html>
