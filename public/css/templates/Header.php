<?php

$title = $title ?? "";
$description = $description ?? "";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="css/main.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Logo</a></li>
                    <li><a href="/carti.php">Cărți</a></li>
                    <li><a href="/manual.php">Manual</a></li>
                    <li><a href="/despre.php">Despre</a></li>
                </ul>
            </nav>
        </header>
