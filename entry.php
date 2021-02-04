<?php 

include './inc/header.html';
include './inc/header.php';

print <<< mark


	<section id="header">
		<div>
			<a href="./index.html">Text'n Driver</a>
		</div>
	</section>

	<section id="meat">

		<h2>Please enter a username for the Leaderboard</h2>

mark;

/**************/

if($_REQUEST['username'])
{
	$username = mysqli_real_escape_string($db, $_REQUEST['username']);
	$score = $_GET['score'];

	$date = date("Y-m-d H:i:s");

	query("insert into players (username, score, date) values ('$username', $score, '$date')");

	mysqli_close($db);

	header("Location: ./leaderboard.php");
}

?>


	<div id="dataCapt">
		<input id="username"></input><br>

		<button name="submit" onclick="enterUname()">Enter</button>
	</div>

</section>

<script>

function enterUname()
{

	var uname = document.getElementById("username").value;

	window.location.href += "&username=" + uname;
}

</script>


<div id="footer">
		
	<p>Text'n Driver is a property of Michael Jones ©2020</p>
</div>


