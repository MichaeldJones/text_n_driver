<!DOCTYPE html>
<html>
<body>

	<section id="header">
		<div>
			<a href="./index.html">Text'n Driver</a>
		</div>
	</section>

	<?php 

		include './inc/header.html';
		include './inc/header.php';

		$table = query("select qn, ans from questions");

		$qns  = array();
		$ans = array();

		if(mysqli_num_rows($table) > 0)
		{
			while($row = mysqli_fetch_assoc($table))
			{
				$qns[] = $row['qn'];
				$ans[] = $row['ans'];
			}
		}

		mysqli_close($db);
	 ?>

	<script>
		
		var qns = <?php echo json_encode($qns); ?>;
		var ans = <?php echo json_encode($ans); ?>;

	</script>

	<script>
		function gameOver()
		{
			window.location.href = "./entry.php?score=" + score;
		}
	</script>

	<section id="game">

		<h2>Try to get as many points as possible</h2>

		

		<div id="cvalues"><p id="count"></p></div>

		<div id="prompt"><p id="dir"></p></div>
		
		
		<button onclick="checkDir('left')">left</button>
		<button onclick="checkDir('right')">right</button>
		

		<div class="values"><p id="score"></p></div>

		<div class="prompt"><p id="question"></p></div>

		<div id="dataCapt">
			<input id="answer"></input>

			<button name="submit" onclick="checkAns()">answer</button>
		</div>

		<p id="correct"></p>

		

	</section>

	<script src="./game.js"></script>

	<div id="footer">
		
		<p>Text'n Driver is a property of Michael Jones ©2020</p>
	</div>


</body>
</html>