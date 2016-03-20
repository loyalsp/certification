<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Matching Game!</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css">
div {
	position: absolute;
	width: 500px;
	height: 500px
}

img {
	position: absolute;
}

#rightSide {
	left: 500px;
	border-left: 1px solid black;
}
</style>



</head>



<body id="theBody" onLoad="generateFaces()">
	<h2>Matching Game</h2>
	<p>Click on the extra smiling face on the left.</p>
	<div id="leftSide"></div>
	<div id="rightSide"></div>

	<script type="text/javascript">
		//------------------------------
		// Section: Java Script Code
		//------------------------------

		var numberOfFaces = 5; //global variable for number of faces on left. we kept it global to keep track of previous number of faces

		//
		document.getElementById("theBody").addEventListener("click", gameOver);

		function generateFaces() {
			var theLeftSide = document.getElementById("leftSide");
			var theRightSide = document.getElementById("rightSide");
			// loop to generate 5 faces and places them at random positions
			// inside "theLeftSide" div
			for (var i = 1; i <= numberOfFaces; i++) {
				var x = Math.random() * 400;
				x = Math.floor(x);
				var y = Math.random() * 400;
				y = Math.floor(y);
				var imgNode = document.createElement("img"); // we creating a node here
				imgNode.src = "smile.png"; // setting the src attribute for the image
				imgNode.style.top = x + "px"; // we can use imgNode.setAttribute("style","top:"+x+"px") as well
				imgNode.style.left = y + "px"; //similarly can use imgNode.setAttribute("style","left:"+y+"px") as well
				theLeftSide.appendChild(imgNode);
			}

			// we need to add a handler to the last child's click event
			theLeftSide.lastChild.addEventListener("click", nextLevel);

			// clone the "leftSide" branch to have a copy for the right side
			var the_clone = theLeftSide.cloneNode(true); // clone of the whole leftSide

			// since we want to have one less face, we need to remove one face from the_clone.
			// so, we will remove the last child from the the_clone
			the_clone.removeChild(the_clone.lastChild);

			// now at this point the_clone will have 4 nodes and now we append the_clone to the right side
			theRightSide.appendChild(the_clone);
		}

		//This function is called when the last face/child of the left side is clicked
		// we delete all the previous nodes and  generate double of the previous faces
		function nextLevel() {
			numberOfFaces = numberOfFaces + 5; // increment by 5 to add 5 more faces

			// delete/remove  all the current faces/nodes of left side
			var left_nodes = document.getElementById("leftSide");
			while (left_nodes.hasChildNodes()) {
				left_nodes.removeChild(left_nodes.firstChild) // removes the first child from the left side
			}
			// to delete/remove all nodes form right 
			var right_nodes = document.getElementById("rightSide");
			while (right_nodes.hasChildNodes()) {
				right_nodes.removeChild(right_nodes.firstChild) // removes the first child from the left side
			}

			// we again call the generateFaces to make new faces/nodes. Remember we generate more faces this time than previous
			generateFaces();
		}

		function gameOver() {
		
			// give a message first 
			alert("Game Over!");
			var theBody = document.getElementById("theBody");
			theBody.removeEventListener("click", gameOver);// this is equivalent to removing the click handler. Means gameOver will not be called after this if we click on the body.

			//similarly we wan to remove the handler fromt the left side's last node as well
			var left_nodes = document.getElementById("leftSide");
			left_nodes.lastChild.removeEventListener("click", nextLevel); // after this last node of left side will not repsond to any click
		}
	</script>
</body>
</html>