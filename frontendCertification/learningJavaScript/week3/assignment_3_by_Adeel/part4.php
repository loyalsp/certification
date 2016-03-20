<?php
?>

<!DOCTYPE html>
<html>
<head>
  <title>Part 4</title>
  <style>
    div {
      height: 500px;
      width: 500px;
      position: absolute;
    }
    img {
      position: absolute;
    }
    #leftSide{
      left: 0px;
      padding: 0;
      margin: 0;
    }
    #rightSide{
      border-left: 1px solid black;
      left: 500px;
      padding: 0;
      margin: 0;
    }
  </style>
<script>
var numberOfFaces=5;
var count=1;
function generateFaces(){
  var theBody=document.getElementsByTagName("body")[0];
  var theLeftSide=document.getElementById('leftSide');
  var theRightSide=document.getElementById('rightSide');
  for (var i=0; i<numberOfFaces; i++){
    top_side=Math.floor(Math.random()*401);
    left_side=Math.floor(Math.random()*401);
    createImg=document.createElement('img');
    theLeftSide.appendChild(createImg);
    imgProp=document.getElementsByTagName('img')[i];
    imgProp.setAttribute('src', 'http://home.cse.ust.hk/~rossiter/mooc/matching_game/smile.png');
    imgProp.setAttribute('style', 'left: '+left_side+'px; top: '+top_side+'px');
    }

    last_chield=theLeftSide.lastChild;
    leftSideImages = theLeftSide.cloneNode(true);
    leftSideImages.removeChild(leftSideImages.lastChild);
    theRightSide.appendChild(leftSideImages);

    theBody.onclick = function gameOver() {
    alert("Game Over!\nOh! What a pity! You finished in the level "+count+'!\nPress F5 to begin again.');
    theBody.onclick = null;
    theLeftSide.lastChild.onclick = null;
}

    theLeftSide.lastChild.onclick = function nextLevel(event){
      count++;
      alert("Congratulations!!\n\n Let's go to the Level "+ count+'!')
        event.stopPropagation();
        numberOfFaces = numberOfFaces+5;
        while (theLeftSide.firstChild){
          theLeftSide.removeChild(theLeftSide.firstChild);
        }
        while (theRightSide.firstChild){
          theRightSide.removeChild(theRightSide.firstChild);
        }
        generateFaces();
}
}
</script>
</head>
<body onload="generateFaces()">
  <h1>Marching Game</h1>
  <p>Click on the extra smiling faces on the left.</p>
  <div id="leftSide"></div>
  <div id="rightSide"></div>
</body>
</html>
