<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    body {font-family: Arial, Helvetica, sans-serif; background-repeat: no repeat; color: white; text-transform: uppercase;
  background-size: 100%;
}
    table{
        border: 3px white; height: 100%;
    }
    th {border: 2px solid black;   color: black; height: 100px;

    }
    
.go-home-btn {
    margin-top: 20px;
    width: 100%;
    background-color: #5BAAFF;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.go-home-btn:hover {
    background-color: #FF6652;
}

.go-home-btn:focus {
    outline: none;
}

.go-home-btn:active {
    background-color: #bbb;
}

.go-home-btn:hover, .go-home-btn:focus, .go-home-btn:active {
    transform: translateY(-1px);
}
    body{
background-color: white;
    } 
    p{
        color: black;
    }


</style>
<body> 

<?php

    

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $query="select * from player  where playername like '%$player%'";
   
    
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){

       

        echo " <h1><p align="."center".">".$row["playername"]."<p></h1><table width="."100%"." height="."500px"."><tr><th height="."100%"." width="."30%"."><img src=".$row["image"]." width="."300px"."></th><th><table width="."100%".">
        <tr><th>PLAYERNAME</th><th>".$row["playername"]."</th></tr>
        
        <tr><th>TEAM</th><th>".$row["name"]."</th></tr>
        <tr><th>RUNS</th><th>".$row["runs"]."</th></tr>
        <tr><th>Wickets</th><th>".$row["wickets"]."</th></tr>
        <tr><th>No of Matches</th><th>".$row["no_of_matches"]."</th></tr>


        <tr><th>TYPE</th><th>".$row["type"]."</th></tr>
        <tr><th>BATTING BEST</th><th>".$row["batting_best"]."</th></tr>
        <tr><th>BOWLING BEST</th><th>".$row["bowling_best"]."</th></tr></table></th>
        </tr></table>";



    }

    }

else
{
     echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
      header("refresh: 0.01; url=admin1st.html");
    
}

mysqli_close($con);    ?>
<button class="go-home-btn" onclick="window.location.href = 'admin1st.html';">Go Back Home</button>


</body></html>