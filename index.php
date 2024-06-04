<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--     https://github.com/Dahkenangnon/PhpFromZero/blob/master/src/controllers/AuthController.php -->

    <style>
        .text {
            border: 1px solid #cacaca;
            font-size: 1.3rem;
            font-weight: 600;
            text-align: center;
            text-wrap: nowrap;
            width: 350px;
            padding: 1rem 2rem;
            margin: 1rem;
            text-transform: uppercase;
            user-select: none;
            position: relative;
            transform: scale(1);
            transition: 0.2s all ;
            border-radius: 7px;

         }

        .text:hover {
            transform: scale(1, 1.2);
            border: 1px solid green;
        }
    </style>
</head>

<body>
    <?php

    $arr = array("ram", "shyam", "Gopi");

    for ($i = 0; $i < count($arr); $i++) {
        echo "<div class='text'> $arr[$i] </div>";
    }



    ?>
</body>

</html>
