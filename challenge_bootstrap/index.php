<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Barad-dûr</title>
    </head>
    <body>
    <h1> Barad-dûr with Boostrap</h1>
    <?php
    $baradDurPixels = [
            ['grey', 'white', 'white', 'white', 'white', 'white', 'white','white','white','white', 'grey', 'white',],
            ['grey', 'white', 'white', 'white', 'orange', 'yellow', 'orange','white','white','white', 'grey', 'white',],
            ['grey', 'white', 'white', 'orange', 'yellow', 'black', 'yellow','orange','white','white', 'grey', 'white',],
            ['grey', 'grey', 'orange', 'orange', 'yellow', 'black', 'yellow','orange','orange','grey', 'grey', 'white',],
            ['grey', 'grey', 'white', 'orange', 'yellow', 'black', 'yellow','orange','white','grey', 'grey', 'white',],
            ['grey', 'grey', 'grey', 'white', 'orange', 'yellow', 'orange','white','grey','grey', 'grey', 'white',],
            ['white', 'grey', 'grey', 'grey', 'white', 'white', 'white','grey','grey','grey', 'white', 'white',],
            ['white', 'white', 'grey', 'grey', 'grey', 'grey', 'grey','grey','grey','white', 'white', 'white',],
            ['white', 'white', 'white', 'grey', 'grey', 'grey', 'grey','grey','white','white', 'white', 'white',],
            ['white', 'white', 'white', 'white', 'grey', 'grey', 'grey','white','white','white', 'white', 'white',],
            ['white', 'white', 'white', 'white', 'grey', 'grey', 'grey','white','white','white', 'white', 'white',],
    ];
    ?>

        <div class="container">
                <?php
                foreach ($baradDurPixels as $baradDurLine) {
                    ?> <div class="row no-gutters"> <?php
                        foreach ($baradDurLine as $baradDurPixel) {
                            ?> <div class="col-1 <?= $baradDurPixel ?>"></div> <?php
                        }
                ?> </div> <?php

                }
                ?>
        </div>-->



        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous">
        </script>
    </body>
</html>