<?php

include __DIR__ . '/../database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-dischi</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <header>

        <a href="#">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="spotify logo" />
        </a>

    </header>

    <main>

        <div class="albums container">

            <?php
                foreach ($database as $data) {
                    echo "<a href='#' class='card'>
                            <img class='cardImg' src='" . $data['poster'] . "' />
                            <h3 class='title'> $data[title] </h3>
                            <div class='text'> $data[author] </div>
                            <div class='text'> $data[year] </div>
                        </a>";
                }
            ?>

            

        </div>

    </main>


</body>

</html>