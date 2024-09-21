<html>
<body>
<style>
	body {font-family: Arial, Helvetica, sans-serif;background-repeat: no repeat; text-transform: uppercase;
  background-size: 100%;
	}
	table{
		border: 1px solid black; 
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
	.go-home-btn {
    margin-top: 20px;
    width: 12%;
    background-color: #5D7DFF;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.go-home-btn:hover {
    background-color: #FF3748;
}

.go-home-btn:focus {
    outline: none;
}

.go-home-btn:active {
    background-color: #FF3748;
}

.go-home-btn:hover, .go-home-btn:focus, .go-home-btn:active {
    transform: translateY(-1px);
}

</style>
<table width="100%"; align="center"><tr><th>
	<?php
	$con=mysqli_connect("localhost","root","","cricket");
		 $match_no=$_POST['match_no'];
		 $que="select team1 from schedules where match_no='$match_no'";
				
		echo "Squad for match number $match_no ";
	
		?></th></tr></table>

<title>SQUAD</title>

<table width="100%"><tr><th>
 	<table align="center">
		
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername FROM schedules s,player p WHERE s.team1=p.name AND s.match_no='$match_no'";
		$result1=mysqli_query($con,$query1);

		$query="select sc.team1 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team1"]."</b></th></tr>";
                    }
    	}


		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["playername"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th><th>


		<table align="center">
		

 		<?php
 		$match_no=$_POST['match_no'];
 		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername FROM schedules s,player p WHERE s.team2=p.name AND s.match_no='$match_no'";
		$result1=mysqli_query($con,$query1);
		

		$query="select sc.team2 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team2"]."</b></th></tr>";
                    }
    	}

		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["playername"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th></tr></table>
		<br><br>


<table width="100%"; align="center">
</table>


<button class="go-home-btn" onclick="window.location.href = 'admin1st.html';">Go Back Home</button>

</body>
</html>