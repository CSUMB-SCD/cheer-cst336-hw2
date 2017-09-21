<?php
    
    
    
    
  function run_game(){
    
      
      

      $players = array(
        'Yboiwyn',
        'Ginna',
        'Yiedon',
        'Weweth',
        'Ibas',
        'Cirelind',
        'Minwan',
        'Nirelith',
        'Cadelajan',
        'Zerradith',
        'Lothirenidd',
        'Rardowen',
        'Merarid',
        'Kedealla',
        'Sevoanad',
        'Aaunna',
        'Galauth',
        'Alalind',
        'Bin',
        'Alilan',
        'Dwendakoth',
        'Grelima',
        'Elukor',
        'Cralessi',
        'Agreatram',
        'Groeri'
      );
    

      
    do{
      $i = 0;
      
    
      $player_pos = rand(0, count($players)-1); //killed
        do{
            $player_pos2 = rand(0, count($players)-1);//winner
            
            //echo "    player_pos " . $player_pos . " player_pos2  " . $player_pos2 . " <br>";
        }while($player_pos == $player_pos2);    //as long as the winner didn't kill themself
        
        
        $weapon = "";
        $choice = rand(0,2);
        switch($choice){
          case 0:
            $weapon = "razerlaser";
            break;
          case 1:
            $weapon = "minigun";
            break;
          default:
            $weapon = "fist";
        }
          
        //get method text
        $method_text = get_method($weapon);
        
        $winner = $players[$player_pos2];
        
        $killed = kill_player($player_pos, $players);
        
        //unset($players[$player_pos]); // this does not work!!!
        
        echo "<div class='scoreboard_item'> <span class= 'winner'>" . $winner . "</span> "
          . $method_text 
          . " <span class= 'loser'>" . $killed . "</span> " 
          . " with their <span class='weapon'>" . $weapon ." <img src='img/".$weapon.".png'></span></div>";
          
        $i++;

    } while (count($players) > 1 && $i < 50);
    echo "<div class='winner'>".$players[0] ." is the last one standing! </div>";
  }
    

function kill_player($player_pos, &$playersArray){
    $temp = $playersArray[$player_pos];
    array_splice($playersArray, $player_pos, 1);
    return $temp;
}

function get_method($weap){
    $method_weapon = array(
      'rocketed',
      'dominated',
      "jello'd",
      'sniped',
      'outsmarted',
      'tested illegal technologies on',
      'outgunned',
      'obliterated',
      'showed the meaning of life to',
      'brrrz\'d',
      'showed the razzle dazzle to'
      );
    
    $method_melee = array(
      'dominated',
      'obliterated',
      'showed the meaning of life to',
      'pummeled',
      'suckerpunched',
      'bested in fistycuffs'
      );
    if($weapon == "fist"){
        $method_choice = rand(0,count($method_melee)-1);
        $method_text = $method_melee[$method_choice];
    }
    else{
        $method_choice = rand(0,count($method_weapon)-1);
        $method_text = $method_weapon[$method_choice];
    } 
    
    return $method_text;
}
    // function generateValue($size, $array)
    // {
    //   for($i=0;$i<;$i++){
    //       array_push($array,$i);
    //   }
    //   shuffle($array);
    //   return $array;
    // }
    
    
    
    



    //ref block
  {  //  $person = array(
    //     "name" => "Nathan", 
    //     "profilePicUrl" => "./profile_pics/Nathan_Levis.png", 
    //     "cards" => generateHand($deck)
    // ); 
    
    // //sets up the values of a deck and shuffles them
    // function generateDeck(){
    //         $cards = array();
    //         for($i=0;$i<52;$i++){
    //             array_push($cards,$i);
    //         }
    //         shuffle($cards);
    //     }
        
    // //maps a value to a card
    // function cardMap($num){
    //         $cardValue = ($num%13)+1;
    //         $cardSuit = floor($num/13);
    //         $suitStr ="";
    //         switch($cardSuit){
    //             case 0:
    //                 $suitStr = "clubs";
    //                 break;
    //             case 1:
    //                 $suitStr = "hearts";
    //                 break;
    //             case 2:
    //                 $suitStr = "diamonds";
    //                 break;
    //             case 3:
    //                 $suitStr = "spades";
    //                 break;
    //         }
    //         $card = array(
    //             'num' =>$cardValue,
    //             'suit' => $cardSuit,
    //             'imgURL' => "./cards/" .$suitStr."/".$cardValue.".png"
    //             );
    //     }
        
    // //generates a hand for a 
    // function generateHand($deck){
    //         $hand=array();
    //         for($i=0;$i<2;$i++){
    //             $card = array_pop($deck);
    //             array_push($hand, $card);
    //         }
    //         return $hand;
    //     }
      
  
    // function displayPerson($person) {
    //     // show profile pic
    //     echo "<img src='".$person["profilePicUrl"]."'>"; 
        
        
    //     // iterate through $person's "cards"
        
    //     for($i = 0; $i < count($person["cards"]); $i++) {
    //         $card = $person["cards"][$i];
            
    //         // translate this to HTML 
    //         echo "<img src='".$card["imgURL"]."'>"; 
    //     }
        
    //     echo calculateHandValue($person["cards"]); 
    // }
    
    
    // function calculateHandValue($cards) {
    //     $sum = 0; 
        
    //     foreach ($cards as $card) {
    //         $sum += $card["num"]; 
    //     }
        
    //     return $sum; 
    // }
    
    
    //displayPerson($person); 
    }
    
?>

