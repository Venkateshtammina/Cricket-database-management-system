<!DOCTYPE html>
<html>
<style >
	body {background-repeat: no repeat; text-transform: uppercase;
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
    background-color: #5381FF;
    color: #333;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.go-home-btn:hover {
    background-color: #FF3752;
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


</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body background="img/bg1.jpg"> 
<div ><table align="center" width="30%"><tr><th><p><h1 style="color: black;">SCHEDULES</h1></p></th></tr></div>
	 <div style="margin-top:200px;" >
	<table align="center">
		<tr>
			<th>Date</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Match Number</th>
		<!--	<th>VENUE</th>-->
		
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select *from schedules order by date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["date"]."</th><th>".
			$row["team1"]."</th><th>".
			$row["team2"]."</th><th>".
			$row["match_no"]."</th><th>";
			/*.$row["stadium_name"]."</th></tr>";*/
			}
		}
		mysqli_close($con);
		?>


<tr>
		 <form action="ttu.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter Match Number to retrieve players
            <input type="number" name="match_no" style="width: 300;height: 25;"><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>

	<center><button class="go-home-btn" onclick="window.location.href = 'admin1st.html';">Go Back Home</button></center>
</body>
</html>