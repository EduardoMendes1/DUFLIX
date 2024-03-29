<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            position: relative;
            top: 50%;
            display: fixed;
            justify-content: center;
            align-items: center;
        }


        .avatares {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 90%);
            display: flex;
            justify-content: center;
        }

        .avatares img {
            width: 200px;
            object-fit: contain;
            margin: 10px;
        }

        .avatares img:hover {
            border: 2px solid #fff;
            cursor: pointer;
        }

        .letras {
            position: absolute;
            display: flex;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 20%);

        }

        .letras h3 {
            margin: 80px;
            font-size: 20px;
            color: #484747;
        }

        .letras h3:hover {
            color: #fff;
        }

        h1 {
            position: relative;
            top: 150px;
            text-align: center;
            font-size: 70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Quem está assistindo?</h1>
        <div class="avatares">
            <img src="./img/avatar 1.png" alt=""><br>
            <br>
            <img src="./img/avatar 2.jpg" alt=""><br>
            <br>
            <img src="./img/avatar 3.jpg" alt=""><br>
            <br>
            <img src="./img/avatar 4.jpg" alt=""><br>
            <div class="letras">
                <h3>Eduardo</h3>
                <h3>Gabriel</h3>
                <h3>Mendes</h3>
                <h3>Cândido</h3>
            </div>
            <br>
        </div>
    </div>
</body>

</html>