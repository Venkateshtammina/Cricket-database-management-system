<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
     .go-home-btn {
            margin-top: 20px;
        }
</style>
<body style="margin: 50px;">
    <table class="table">
        <thead>
            <tr>
                <th>Team</th>
                <th>Played</th>
                <th>Won</th>
                <th>Lost</th>
                <th>No Result</th>
                <th>Points </th>
                <th>net-run-rate</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "cricket";

            $connection = new mysqli($servername , $username, $password, $database);
             if($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
             }
             $sql="SELECT * FROM tournament order by (points+nrr) desc";
             $result = $connection->query($sql);
             if(!$result){
                die("Invalid query:" . $connection->error);
             }
             while($row = $result->fetch_assoc()){

             
             echo "<tr>
             <td>" . $row["team"] . "</td>
             <td>" . $row["played"] . "</td>
             <td>" . $row["won"] . "</td> 
             <td>" . $row["lost"] . "</td> 
             <td>" . $row["nr"] . "</td> 
             <td>" . $row["points"] . "</td> 
             <td>" . $row["nrr"] . "</td> 
             </tr>";
             }
            ?>
        </tbody>
    </table>
    <a href="admin1st.html" class="btn btn-primary go-home-btn">Go Back to Home</a>
</body>
</html>