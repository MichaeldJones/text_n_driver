
var count = 6;
var dir   = 'right';
var score = 0;
var qnum;

var update = setInterval(function() {

	if(count === 0)
	{
		gameOver();
	}

	document.getElementById("count").innerHTML = count;
	document.getElementById("dir").innerHTML = dir;
	
	count -= 1;


}, 1000);

function checkDir(guess)
{

	if(guess === dir)
	{
		count = 6;

		if (Math.floor(Math.random() * 2))
		{
			dir = 'right';
		}
		else
		{
			dir = 'left';
		}

		qnum = Math.floor(Math.random() * qns.length);

		document.getElementById("question").innerHTML = qns[qnum];

		document.getElementById("correct").innerHTML = "";

	} 
	else
	{
		count = 0;
	}
}

function checkAns()
{
	var guess   = document.getElementById("answer").value;
	var correct = ans[qnum];

	document.getElementById("correct").innerHTML = correct;

	if(guess.trim() === correct.trim())
	{
		document.getElementById("correct").style.color = "green";
		score += 1;
	}
	else
	{
		document.getElementById("correct").style.color = "red";
	}

	document.getElementById("answer").value = "";

	document.getElementById("score").innerHTML = score;
}
