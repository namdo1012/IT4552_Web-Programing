<?php 
    require 'classPage.php';
    $webPage = new Page('Another page', date('Y'), 'Made by me');
    $webPage->addContent("<style>
        body{
            font-family: \"Comic Sans MS\", cursive, sans-serif;
            font-size: 18px;
            }
        hr{
            position: relative;
            margin: 2em auto;
            padding: 0;
            width: 80%;
            height: 2px;
            background: #e6e6e6;
            border: 0;
            }
        .footer{
            position: fixed;
            left: 0;
            bottom: 10px;
            width: 100%;
            color: black;
            text-align: center;
            }
    </style>");
    $webPage->addContent("<hr><p align=\"center\">Roses are red
        <br>Violets are red
        <br>Everything's red
        <br>Holy shit the garden's on fire</p>");
    echo $webPage->get();
?>
