<link rel="stylesheet" href="css/lab3.css"></link>

<?php
    $playerPoints = array();
    $playerCounter = 1;
    function displayRandomCard()
    {
        $deck = array();
        
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
        global $playerPoints;
        global $playerCounter;
        
        $points = array(); 
        for ($k = 0; $k < 4; $k++)
        {
            $points[$k] = 0;
            
        }
           
         $players = array(); 
        for ($k = 1; $k <= 4; $k++)
        {
            $players[] = $k;
        }
        $players = array("Meya", "Tom", "Luis", "Brandon");//players array with names 
        
                echo "<tr>";
                  
                    
                    $j = 0;
                   while ($points[$i] <= 35) //keep drawing until 35
                    {
                        $newtemp = displayRandomCard();
                        
                        echo "<td>" . $newtemp . "</td>";
                        
                        $newcard = $newtemp;
                         if ( $newcard >= 10 ) // if card is queen jack or king it has 10 points 
                          {
                            $points[$i] += 10; 
                             
                           }
                         else{
                            $points[$i] += $newcard;
                            
                        }
                        $j++; 
                    }
                
                $playerPoints[] = $points;
                
                echo "Points: $points[$i]";
                echo "</tr> <br /><br />";
                
                //Add extra if statement to add card for hit.
                //Need condition to prevent same card from being drawn.
    }
    
       /*
        $winner = array(); //declaring an array to hold points of the winners, in case there are more than one winner 
        for ($k = 0; $k < 4; $k++)
        {
            $winner[$k] = 0;
        }
        
        $max = -2;
        $maxIndex;
        $player;
        for ($j=0; $j < 4; $j++){
            if ( $points[$i] > 42) 
            {
                $points[$i] == 0;
            }
          
          for($i = 0; $i < 4; $i++) //finding the max points
          {
              
              if ($max <= $points[$i])
              {
                  $maxIndex = $i;
                  $player = $i;
                 
              }
             
          }
          

        
        
        echo "Winner: " . $points[$maxIndex] ; //need to display winner name*/
  
    //    echo $players[($player+1)];
            

                //Need condition to prevent same card from being drawn. //still need
                    
//}
      
    function findWinner()
    {
        global $playerPoints;
        $winner = max(array_keys($playerPoints));
        switch ($winner){
            case 1:
                echo "Brandon Won!";
                break;
            case 2:
                echo "Luis Won!";
                break;
            case 3:
                echo "Meya Won!";
                break;
            case 4:
                echo "Some random dude Won!";
                break;
        }
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
            <table>
                Brandon: <img src="img/players/brandon.png" alt="p1" width="100" />
                    <?=drawCards()?>
                Luis: <img src="img/players/luis.png" alt="p2" width="100" />
                    <?=drawCards()?>
                Meya: <img src="img/players/meya.png" alt="p3" width="100" />
                    <?=drawCards()?>
                Photogenic Man: <img src="img/players/man.jpg" alt="p4" width="100" />
                    <?=drawCards()?>
            <table>
                
                <br />
                <?=findWinner()?>
        </main>
        <br />
        <br />

        <footer>
            <hr> &copy; Cruz, Gorbea, Mora, 2016 <br /> Disclaimer: The information displayed and linked is the product of an initial website build for an intro to internet programming class. <br /> It serves as a website built for homework purposes.<br />

            <img src="../../../CSUMB logo.jpg" width="100">
        </footer>

    </body>

</html>