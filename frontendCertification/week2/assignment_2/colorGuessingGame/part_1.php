<?php
?>
<!doctype html>
<html>
<head>
<title>Learning Javascript</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body onload="do_game();">

<script type="text/javascript">
var colors = ["red","blue","black","gold",
"magenta","purple","cyan","orange","yellow"];
var sortedColorList = colors.sort();
var targetColorNumber;
var guesses = 0;
var finished = false;
var inputColorNumber;
var computer_guessed_color;


function do_game()
{		
		var random_number = Math.random()*sortedColorList.length;
		var colorNumber = Math.floor(random_number); //this is computer generated number for a colo
		computer_guessed_color = sortedColorList[colorNumber]; //The color that computer has thought
		alert(computer_guessed_color)
	while(!finished)
	{
		
		guess_input_color = prompt("i am thinking of one of these colors:\n\n"+
		sortedColorList+"\n\nWhat color am i thinking of");
		var inputColorNumber = sortedColorList.indexOf(guess_input_color);
		
		
		if(colorNumber==inputColorNumber)
	{
		finished = true;
	
	}

	
	}
}





</script>
</body>
</html>