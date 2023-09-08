<?php

include ('api.php')

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">

    <title>Погода в твоем городе</title>
</head>
<body>

    <div class="container">
        <div class="content">
            <h1>Какая сейчас погода в городе</h1>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Город</label>
                    <input type="text" class="form-control" name="city" id="currentCity" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Поиск</button>
            </form>

            <?php if ($_GET['city'] == ''): ?>

            <?php else: ?>
                <div class="weather-info">
                    <p>Сейчас в <?=$_GET['city']?></p>
                    <div class="weather-info__temperature">
                        <p>Температура воздуха <?=$weatherTemp;?>&#8451;</p>
                    </div>
                    <div class="weather-info__wind">
                        <p><?=$weatherWind > 0 ? 'Ветер ' . $weatherWind . ' м/с' : 'Безветренно';?></p>
                    </div>
                    <div class="weather-info__cloud">
                        <p><?=$weatherCloud == 'clear sky' ? 'Ясно ' : 'Облачно';?></p>
                    </div>
                </div>
            <?php endif;?>

        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>

