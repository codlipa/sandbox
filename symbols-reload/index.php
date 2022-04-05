<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content=".01">
        <style>
            body {
                background-color: #000;
                word-wrap: break-word;
                text-align: center;
                font-family: Arial;
                overflow: hidden;
                color: #0f0;
                margin: 0;
            }

            div {
                color: #000;
                font-size: 250px;
                text-transform: uppercase;
                transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
            }
        </style>
    </head>

    <body>
        <?php
            for ($i = 1; $i <= 25000; $i++) {
                echo rand(0, 1);
            }
        ?>

        <div>We are anonymous</div>
    </body>
</html>