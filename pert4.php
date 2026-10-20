<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyukut Serombyotan</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
            display: none;
        }
        .kotak-info{
            background-color: #ffbc04;
            padding: 15px;
            margin: 10px;
            border: 2px solid #ff0000;
            border-radius: 6px;
        }
       
    </style>

</head>
<body>

<div class="flex-center">
    <div class="kartu-profile">
        <h2>Budi Sudarsono</h2>
        <p>Web Desain</p>
        <button onclick="info()" class="btn-detail">Info lengkap</button>
    </div>
</div>

<div class="kotak-info sembunyi">
    <h1> Informasi Detail </h1>
</div>

<script>
    function info(){
        alert("Tombol Lengkap di ke clik");
    }
</script>
</body>
</html>