<?php require("functions.php");?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP WEATHER APP</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-image: url(weather.jpg);
            color: #fff !important;
            background-size: cover;
            background-attachment: fixed;
        }

        .container {
            text-align: center;
            justify-content: center;
            align-items: center;
            width: 440px;
        }

        .container h1 {
            font-weight: 700;
            margin-top: 150px;
        }

        input {
            width: 350px;
            padding: 5px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Search Global Weather</h1>
        <form action="" method="POST">
            <label for="city">Enter your city name</label>
            <p><input type="text" name="city" id="city" placeholder="city name"></p>
            <button type="submit" name="submit" class="btn btn-success">Submit now</button>
            <div class="output">

                <?php
                if (!empty($weather)) {
                    echo '<div class="alert alert-success" role="alert">
                    ' . $weather . '
                      </div>';
                }


                if (!empty($error)) {
                    echo $error ? '<div class="alert alert-danger" role="alert">
                    ' . $error . '
                      </div>' : ' ';
                }


                ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>