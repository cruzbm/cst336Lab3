<link rel="stylesheet" href="css/lab3.css"></link>

<?php
    
    function displayRandomCard()
    {
        $deck = array();  //This initializes an array of 
        
        for ($i = 0; $i < 52; $i++)
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
        $card = rand(1,13);
        echo "<img src='img/cards/$randomSuit/" . $card . ".png' />";
        return $card; 
    }
    
    function drawCards()
    {
        global $card;
        $points = array(); 
        for ($k = 0; $k < 4; $k++)
        {
            $points[$k] = 0;
            
        }
       
        echo "<table>";
            for ($i = 0; $i < 4; $i++)
            {
                echo "<tr>";
                  
                    
                    $j = 0;
                   while ($points[$i] <= 35)
                    {
                        $newtemp = displayRandomCard();
                        
                        echo "<td>" . $newtemp . "</td>";
                        
                        $newcard = $newtemp;
                         if ( $newcard >= 10 )
                          {
                            $points[$i] += 10; 
                             
                           }
                         else{
                            $points[$i] += $newcard;
                            
                        }
                        $j++; 
                    }
                    
                
                echo "Points: $points[$i]";
                echo "</tr> <br /><br />";
            }
                //Add extra if statement to add card for hit.
                //Need condition to prevent same card from being drawn.
                    
            }
      

?>



<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack Lab</title>
    </head>
    <body>
        <h1>SilverJack</h1>
        <main>
            <?=drawCards()?>
        </main>
        <br />
        <br />
    
            <footer>
                <hr> &copy; Cruz, Gorbea, Mora, 2016 <br /> Disclaimer: The information displayed and linked is the product of an initial website build for an intro to internet programming class. <br />
                It serves as a website built for homework purposes.<br />

              <img src="/img/otter$.png" alt = "Otters" height="200" width="200">
            </footer>

    </body>
</html>