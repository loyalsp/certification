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

	
	div{
	position:absolute;
	width:500px;
	height:500px
	}
	img{
	position:absolute;
	}
	
	#rightSide{
	left:500px;
	border-left: 1px solid black;
	}
    </style> 
    
   
	
</head>



<body id="theBody" onLoad = "generateFaces()">
<h2>Matching Game</h2>
<p>Click on the extra smiling face on the left.</p>
<div id="leftSide"></div>
<div id="rightSide"></div>

<script type= "text/javascript">
//------------------------------
// Section: Java Script Code
//------------------------------

function generateFaces()
{
	var numberOffaces= 5;
	var theLeftSide= document.getElementById("leftSide");
	var theRightSide=  document.getElementById("rightSide");
// loop to generate 5 faces and places them at random positions
// inside "theLeftSide" div
	for(var i = 1; i <= 5; i++)
	{
	var x= Math.random()*400;
	x = Math.floor(x);
	var y= Math.random()*400;
	y = Math.floor(y);
	var imgNode = document.createElement("img"); // we creating a node here
	imgNode.src = "smile.png"; // setting the src attribute for the image
	imgNode.style.top= x+"px"; // we can use imgNode.setAttribute("style","top:"+x+"px") as well
	imgNode.style.left= y+"px"; //similarly can use imgNode.setAttribute("style","left:"+y+"px") as well
	theLeftSide.appendChild(imgNode);
	}

// clone the above generated branch for the leftSide div
	var the_clone = theLeftSide.cloneNode(true); // clone of the whole leftSide

// since we want to have one less face, we need to remove one face from the_clone.
// so, we will remove the last child from the the_clone
	the_clone.removeChild(the_clone.firstChild);

// now at this point the_clone will have 4 nodes and now we append the_clone to the right side
	theRightSide.appendChild(the_clone);
}
</script>
</body>


</html>
