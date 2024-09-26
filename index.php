<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindWarrior.org</title>
    <?php
        include("includes/favicon.php");
    ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('/images/ai-generated-8707933_1280.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .container a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            font-size: 1.5rem;
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .container a:hover {
            background-color: #ddd;
        }

        @media (max-width: 600px) {
            .container a {
                font-size: 1.2rem;
            }
        }
        span {
            color: #7566c0;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="quick-start-guide.en.<?=getenv('LINK_EXT');?>"><span>/en</span> English</a>
    <a href="quick-start-guide.ru.<?=getenv('LINK_EXT');?>"><span>/ru</span> Русский</a>
</div>
</body>
</html>
