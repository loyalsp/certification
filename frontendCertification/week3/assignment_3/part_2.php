<?php
?>
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

	function generateFaces()
	{
	var numberOffaces= 5;
	var theLeftSide= document.getElementById("leftSide");
	var theRightSide=  document.getElementById("rightSide");

	for(var i = 1; i <= 5; i++)
{
	var x= Math.random()*400;
	x = Math.floor(x);
	var y= Math.random()*400;
	y = Math.floor(y);
	var imgNode = document.createElement("img");
	imgNode.src = "smile.png";
	imgNode.style.top= x+"px";
	imgNode.style.left= y+"px"; 
	theLeftSide.appendChild(imgNode);
}


	}
</script>
</body>


</html>