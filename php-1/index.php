<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berlatih PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: pink;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: maroon;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;

        }
        .button:hover {
            background-color: #800000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Berlatih PHP</h1>
        <p>Selamat datang di latihan PHP. Pilih salah satu latihan berikut untuk melihat hasilnya:</p>
        <div class="button-container">
            <a href="string.php" class="button">Soal String</a>
            <a href="array.php" class="button">Soal Array</a>
        </div>
    </div>
</body>
</html>
