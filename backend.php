<?php 

  if (isset($_POST['submit'])) {
      $player1_choice=generate_player1_choice(); 
      $player2_choice=generate_player2_choice(); 
      $player3_choice=generate_player3_choice(); 
      $player4_choice=generate_player4_choice(); 

     $servername="localhost";
     $username="root";
     $password="";
     $dbname="game";

     $connect = new mysqli($servername,$username,$password,$dbname);

     if ($connect) {
        // echo "Connected to Database Successfully";

         $query=" INSERT INTO
        playerchoice (
          player1_choice,
          player2_choice,
          player3_choice,
          player4_choice
        )
      VALUES(
          '$player1_choice',
          '$player2_choice',
          '$player3_choice',
          '$player4_choice'
        ) ";
         
        
         
         $firequery=$connect->query($query);

            if ($firequery) {
              //  echo"Data Saved Successfully";
            } else {
                echo"Unable to Save Data";
            }
            
     } else {
       // echo "Failed to Connect with Database";
     }
     
   }

    /* Player1 Random Generated Choice */
    function generate_player1_choice(){
         $player1=rand(1,3);
         return $p1_choice=choice($player1);   
    }

    /* Player2 Random Generated Choice */
    function generate_player2_choice(){
         $player2=rand(1,3);
        return $p2_choice=choice($player2); 
    }

    /* Player3 Random Generated Choice */
    function generate_player3_choice(){
         $player3=rand(1,3);
        return $p3_choice=choice($player3); 
    }

    /* Player4 Random Generated Choice */
    function generate_player4_choice(){
         $player4=rand(1,3);
        return $p4_choice=choice($player4); 
    }

    /* players choice */ 
    function choice($choice_no){
        if ($choice_no == 1) {
            return "rock";
        } elseif ($choice_no == 2) {
            return "paper";
        }elseif ($choice_no == 3) {
            return "scissors";
        }        
    }


 


?>