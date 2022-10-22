<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style type="text/css">
        .dashboard{
            text-align: center;
            margin-top: 40px;
        }
        .anhgym{
            width: 30%; 
            border-radius: 50%;
        }
        .phucgymad{
            margin-top: 30px;
            font-size: 20px;
            color: #e17055;
            text-transform: uppercase;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <img src="data:image/jpeg;base64,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" alt="" class="anhgym">
        <p class="phucgymad">Chào mừng Admin GymThree PHUCTP </p>

    </div>
</body>
</html>
