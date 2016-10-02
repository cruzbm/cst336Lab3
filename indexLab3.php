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
       
               
         $players = array(); 
        for ($k = 1; $k <= 4; $k++)
        {
            $players[] = $k;
        }
        $players = array("Meya", "Tom", "Luis", "Brandon");//players array with names 
        
       
       
        echo "<table>";
            for ($i = 0; $i < 4; $i++)
            {
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
                    
                
                echo  $players[$i]. "   Points: $points[$i]";
                echo "</tr> <br /><br />";
                
            }

    
       
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
          

        }
        
        echo "Winner: " . $points[$maxIndex] ; //need to display winner name
  
    //    echo $players[($player+1)];
            

                //Need condition to prevent same card from being drawn. //still need
                    
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