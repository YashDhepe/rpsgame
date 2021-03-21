<?php

function player1_compare($p)
{
    $ans = array();

    if ($p[0] == 'rock')
    {

        $ans[0] = $ans1 = '-';

        for ($i = 1;$i <= 3;$i++)
        {
            if ($p[$i] == "scissors")
            {
                $ans[$i] = $ans2 = 1;
            }
            else
            {
                $ans[$i] = $ans2 = 0;
            }
        }
        return $ans;

    }
    elseif ($p[0] == 'paper')
    {

        $ans1 = '-';
        $ans[0] = $ans1;
        for ($i = 1;$i <= 3;$i++)
        {
            if ($p[$i] == "rock")
            {
                $ans[$i] = $ans2 = 1;
            }
            else
            {
                $ans[$i] = $ans2 = 0;
            }
        }
        return $ans;

    }
    elseif ($p[0] == 'scissors')
    {
        "scissors";
        $ans[0] = $ans1 = '-';

        for ($i = 1;$i <= 3;$i++)
        {
            if ($p[$i] == "paper")
            {
                $ans[$i] = $ans2 = 1;
            }
            else
            {
                $ans[$i] = $ans2 = 0;
            }
        }
        return $ans;
    }
}

function player2_compare($p)
{

    if ($p[1] == 'rock')
    {

        $ans[1] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 1)
            {
                if ($p[$i] == "scissors")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;

    }
    elseif ($p[1] == 'paper')
    {
        "paper";
        $ans[1] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 1)
            {
                if ($p[$i] == "rock")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;

    }
    elseif ($p[1] == 'scissors')
    {
        "scissors";
        $ans[1] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 1)
            {
                if ($p[$i] == "paper")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;
    }
}

function player3_compare($p)
{

    if ($p[2] == 'rock')
    {

        $ans[2] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 2)
            {
                if ($p[$i] == "scissors")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;
    }
    elseif ($p[2] == 'paper')
    {

        $ans[2] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 2)
            {
                if ($p[$i] == "rock")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;

    }
    elseif ($p[2] == 'scissors')
    {

        $ans[2] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 2)
            {
                if ($p[$i] == "paper")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;
    }
}

function player4_compare($p)
{

    if ($p[3] == 'rock')
    {

        $ans[3] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 3)
            {
                if ($p[$i] == "scissors")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;
    }
    elseif ($p[3] == 'paper')
    {

        $ans[3] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 3)
            {
                if ($p[$i] == "rock")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;

    }
    elseif ($p[3] == 'scissors')
    {

        $ans[3] = $ans1 = '-';

        for ($i = 0;$i <= 3;$i++)
        {
            if ($i != 3)
            {
                if ($p[$i] == "paper")
                {
                    $ans[$i] = $ans2 = 1;
                }
                else
                {
                    $ans[$i] = $ans2 = 0;
                }
            }
        }
        return $ans;
    }
}

function player_insert($data, $tableName, $name)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "game";

    $connect = new mysqli($servername, $username, $password, $dbname);

    if ($connect && !empty($data))
    {
        // echo "Connected to Database Successfully";
        $query = " INSERT INTO
                       $tableName (
                         name,  
                         player1,
                         player2,
                         player3,
                         player4
                       )
                     VALUES(
                         '$name',
                         '$data[0]',
                         '$data[1]',
                         '$data[2]',
                         '$data[3]'
                       ) ";

        $firequery = $connect->query($query);

        if ($firequery)
        {
            //  echo"Data Saved Successfully";
            
        }
        else
        {
            echo "Unable to Save Data";
        }

    }
    else
    {
        // echo "Failed to Connect with Database";
        
    }
}

function player_vs_players()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "game";

    $connect = new mysqli($servername, $username, $password, $dbname);

    if ($connect)
    {
        $query = "SELECT * FROM playervs";

        $result = $connect->query($query);

        $i = 0;
        while ($a = $result->fetch_assoc())
        {

            if ($a['name'] == 'Player 1')
            {
                $i++;
?>

<tr class="table-dark">

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
            <th>Round</th>
            <th class="text-danger">Against</th>
            <th scope="col">Player 1</th>
            <th scope="col">Player 2</th>
            <th scope="col">Player 3</th>
            <th scope="col">Player 4</th>
            
          </tr>


  <?php
            }
?>   

                   
                        
                <tr>
              
                    <td><?php ?><?php echo $i; ?></td>
                    <th><?php echo $a['name'] ?></th>
                    <td><?php echo $a['player1'] ?></td>
                    <td><?php echo $a['player2'] ?></td>
                    <td><?php echo $a['player3'] ?></td>
                    <td><?php echo $a['player4'] ?></td>
                  </tr>
                 


                    
          <?php
        }

    }
    else
    {
        echo "Failed to connect with database";
    }
}
?>
