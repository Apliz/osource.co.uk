<?php
include_once("../config.php");
$request = $_SERVER['REQUEST_URI'];
$viewDir = BASEURL .'views/';
$stylesDir = BASEURL .'public/assets/css/'
?>

<!DOCTYPE html>

<html lang='en-GB'>
    <head>
        <link rel='stylesheet' href="/assets/css/template.css"/>
        <link rel='stylesheet' href="/assets/css/styles.css"/>
        <link rel='icon' href='assets/favicon.png'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <meta  charset='utf-8'/>
        <meta name='author' content='Anton Plisnier'/> 
    </head>

    <body>
        <div class="background"></div>
        <?php
            switch ($request) {
                case '':
                case '/':
                    require ROOT . $viewDir . 'profile.php';
                    break;
                default:
                    http_response_code(404);
                    require ROOT . $viewDir . '404.php';
            }               
        ?>
    </body>
</html>

