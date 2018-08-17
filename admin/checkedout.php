<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php
		include_once 'dbh.php';

		$sql = "SELECT * FROM 
(SELECT checkOut.book, r.title, (checkOut.typeCount - checkIn.typeCount) AS checks
FROM (SELECT trans.resource_id as book, count(trans.type) typeCount
        FROM transaction_log trans
                WHERE type = 1
                GROUP BY book) AS checkIn
JOIN (SELECT trans.resource_id as book, count(trans.type) typeCount, timeStamp
    FROM transaction_log trans
    WHERE type = 2
GROUP BY book) AS checkOut ON checkOut.book = checkIn.book
JOIN resource r ON r.id = checkOut.book
GROUP BY checkOut.book) AS bookList
WHERE bookList.checks > 0
";

		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) 
		{
    		while($row = mysqli_fetch_assoc($result)) 
    		{
     	  		echo $row['title'] . " checked out by " . $row['firstname'] . " " . $row['lastname'] . " on " . $row['timestamp'] . "<br>";
   			}
		} 
		else 
		{
   			echo "0 results";
		}

	?>

</body>
</html>