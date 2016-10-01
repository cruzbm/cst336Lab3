<link rel="stylesheet" href="css/lab3.css"></link>

<?php

    function displayRandomCard()
    {
        $deck = array();  //This initializes an array of 
        
        for ($i = 0; $i <= 52; $i++)
        {
            $deck[] = $i;
        }
        
        shuffle($deck);
        //print_r($deck);
        $card = array_pop($deck);
        
        //echo $card . "<br />";
        
        
        
        $suits = array("clubs", "diamonds", "hearts", "spades");
        $randomSuitIndex = rand(0,3);
        $randomSuit = $suits[$randomSuitIndex];     
        echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";
        
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack Lab</title>
    </head>
    <body>
        <h1>SilverJack</h1>

    <?= displayRandomCard() ?>
        
        <br />
        <br />
    
            <footer>
                <hr> &copy; Cruz, Gorbea, Mora, 2016 <br /> Disclaimer: The information displayed and linked is the product of an initial website build for an intro to internet programming class. <br />
                It serves as a website built for homework purposes.<br />

                <img src="../../../CSUMB logo.jpg" width="250" id="csumbLogo"></img>
            </footer>

    </body>
</html>