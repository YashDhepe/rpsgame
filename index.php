<?php 
  error_reporting(0);
  include 'backend.php';
  include 'functions.php';
  include 'playerChoiceBackend.php';
  if (empty($player1_choice)) {
    $player1_choice="question";
    $player2_choice="question";
    $player3_choice="question";
    $player4_choice="question";
  } 
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

   
      
 

    <div class="container">
        <!-- Section 1-->
        <section class="section-1">
            <div class="section-heading">
               <h1>Let's Play World's Famous Game Rock Paper Scissors</h1>
            </div>

            <div class="section-1-icons">
                <i class="fas change"><img src="./images/rock.png" alt=""></i>
                <i class="fas "><img src="./images/paper.png" alt=""></i>
                <i class="fas "><img src="./images/scissors.png" alt=""></i>
             </div>
        </section>
    </div>
    <!-- End of Section 1-->


      <div class="row">
        <div class="col">
          <div class="row ">
            <div class="col text-center img-cont">
              <img src="./images/<?php echo $player1_choice?>.png" alt="">
              <h3 class="p-3">Player 1</h3>
            </div>
            <div class="col text-center img-cont">
              <img src="./images/<?php echo $player2_choice?>.png" alt="">
              <h3 class="p-3">Player 2</h3>
            </div>
            <div class="col text-center img-cont">
              <img src="./images/<?php echo $player3_choice?>.png" alt="">
              <h3 class="p-3">Player 3</h3>
            </div>
            <div class="col text-center img-cont">
              <img src="./images/<?php echo $player4_choice?>.png" alt="">
              <h3 class="p-3">Player 4</h3>
            </div>
          </div>
        </div>
        <div class="row p-4 justify-content-center">
          <div class="col-md-5 text-center">
            <form action="#" method="post"> 
              <input type="hidden" id="p1" value="<?php echo $player1_choice ?>">
              <input type="hidden" id="p2" value="<?php echo $player2_choice ?>">
              <input type="hidden" id="p3" value="<?php echo $player3_choice ?>">
              <input type="hidden" id="p4" value="<?php echo $player4_choice ?>">
              <button class="btn btn-lg m-5" id="play" type="submit" id="submit" name="submit">Let's Play</button>
            </form>
          </div>
        </div>
        <!-- Player Choice Table -->

        <!-- Table Heading -->
        <h1 class="mt-5 mb-5">Players Choice</h1>
        <table class="table table-striped table-light table-hover">
          <thead>
            <tr>
              <th scope="col-md-5">Rounds</th>
              <th scope="col-md-5">Player 1</th>
              <th scope="col-md-5">Player 2</th>
              <th scope="col-md-5">Player 3</th>
              <th scope="col-md-5">Player 4</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i=1; 
              while ($row=$firequery->fetch_assoc()) {
                ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $row['player1_choice'];?></td>
              <td><?php echo $row['player2_choice'];?></td>
              <td><?php echo $row['player3_choice'];?></td>
              <td><?php echo $row['player4_choice'];?></td>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
        <!-- End of Player Choice Table -->


        <!-- Player Vs Player Table -->

        <!-- Table Heading -->      
        <h1 class="mt-5">Players Choice Comparison</h1>
        <table class="table table-striped table-light table-hover">
    
        <!--  <tr>
            <th>Rounds</th>
            <th class="text-danger">Against</th>
            <th scope="col">Player 1</th>
            <th scope="col">Player 2</th>
            <th scope="col">Player 3</th>
            <th scope="col">Player 4</th>
            
          </tr>-->


         <?php

        
         
         
         $p=[$player1_choice,$player2_choice,$player3_choice,$player4_choice];
         if (!empty($p) ){
         echo"<br>";
         $p1=player1_compare($p);
         $p1add=player_insert($p1,'playervs','Player 1');
         echo"<br>";
         $p2=player2_compare($p);
         $p2add=player_insert($p2,'playervs','Player 2');
         echo"<br>";
         $p3=player3_compare($p);
         $p3add=player_insert($p3,'playervs','Player 3');
         echo"<br>";
         $p4=player4_compare($p);
         $p4add=player_insert($p4,'playervs','Player 4');
        // print_r($p1); 


         $ply1=player_vs_players();
        }      
           ?>
         
         
        </table>
        <!-- End of Player Vs Player Table -->
      </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="JS/home.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>