<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Project: Pizza</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style type="text/css">
        .nav{
            text-align: center;
            width: 100%;
            height: 125px;
            background-color: white;
            display:flex;
            justify-content: space-around;
            align-items: center
        }
        .btn{
            background-color: #c2992d;
            font-weight: 400;
            color: white;
            width: 200px;
            height: 50px;
            line-height: 50px;
            border-radius: 5px;
            vertical-align: center;
            font-size: 24px;
        }
        input{
            border: none;
            border-bottom: 2px #d2c7c7 solid;
            width: 100%;
            outline: none;
        }
    </style>
</head>
<body style="background-color: #eadfdf;margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;">
    <nav class="nav">
        <div style="color: #c2992d;
                    font-weight: 400;
                    font-size: 64px;"><a href="index.php" style="text-decoration: none; color: black">Ninja Pizza</a></div>
        <div class="btn">
            <a href="add.php" style="text-decoration: none; color: black">Add a Pizza</a>
        </div>
    </nav>
