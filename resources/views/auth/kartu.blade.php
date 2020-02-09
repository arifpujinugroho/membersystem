<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    .box{
        /* position: relative; */
        /* display: inline-block; Make the width of box same as image */
    }
    .text{
        position: fixed;
        z-index: 999;
        margin: 0 auto;
        color:white;
        right: 40%;
        top: 7.5%; /* Adjust this value to move the positioned div up and down */
        text-align: right;
        width: 80%; /* Set the width of the positioned div */
    }
</style>
</head>
<body><br>
<img src="{{ public_path('assets/Coba.png') }}" width="400px" alt="kartu">
    <div class="box">
        <div class="text">
            <h3>{{ $data->name }}<br><small>{{ $data->nama_instansi }}</small></h3>
        </div>
    </div>
</body>
</html>
