<?php 

include './inc/header.html';
include './inc/header.php';

/**************/

print <<< mark

	<section id="header">
		<div>
			<a href="./index.html">Text'n Driver</a>
		</div>
	</section>

	<section id="meat">

		<h1>Leaderboard</h1>

mark;

$table = query("select * from players order by score desc limit 10");

print <<< mark

	<table>

	<tr><td>Username</td><td>Score</td><td>Date</td></tr>

mark;

while($row = mysqli_fetch_assoc($table))
{
	$name  = $row['username'];
	$score = $row['score'];
	$date  = $row['date'];

	print "<tr><td>$name</td><td>$score</td><td>$date</td></tr>";
}



print <<< mark

	</table>

	</section>

	<div id="footer">
		
		<p>Text'n Driver is a property of Michael Jones ©2020</p>
	</div>
mark;



mysqli_close($db);
