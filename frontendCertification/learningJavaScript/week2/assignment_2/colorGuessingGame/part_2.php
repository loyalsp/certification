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
		targetColorNumber = Math.floor(random_number); //this is computer generated number for a colo
		computer_guessed_color = sortedColorList[targetColorNumber]; //The color that computer has thought
		alert(computer_guessed_color);
	while(!finished)
	{

		guesses = guesses + 1;
		
		guess_input_color = prompt("i am thinking of one of these colors:\n\n"+
		sortedColorList+"\n\nWhat color am i thinking of");
		inputColorNumber = sortedColorList.indexOf(guess_input_color);
		
		finished = check_guess();
		
		
		
	}
}


function check_guess()
{
if(targetColorNumber==inputColorNumber)
		{
		
		myBody=document.getElementsByTagName("body")[0];
		myBody.style.background=computer_guessed_color; //sortedColorList[inputColorNumber];
		alert("Congratulation!You have guessed the color!\n\n"
		+"it took the "+guesses+" guesses to finish the game!\n\n"+
		"You can see the color in the background.");
		return true;
		}
else if(sortedColorList.indexOf(guess_input_color)==-1) 
		{
		alert("Sorry!i do not recognized your number"); 
		return false;
		}	
else if(targetColorNumber<inputColorNumber)
		{
		alert("Sorry your guess is not correct!\n\n"+
		"Hint:your guessed color is alphabetically lower than mine!");
		return false;
		}
else if(targetColorNumber>inputColorNumber)
		{
		alert("Sorry your guess is not correct!\n\n"+
		"Hint:your guessed color is alphabetically higher than mine!");
		return false;
		}	

}


</script>
</body>
</html>