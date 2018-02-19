<?php
$images=array( "flower.png","flower2.png","flower3.png","flowers4.png","flowers5.png"); 
srand(time()); 
shuffle($images); 
for ($i=0;$i<5;++$i) // display my five images 
  echo "<a href='$images[$i]'>image $i</a><br>"; 







/*
$clicks = 0; //counts how may picks have been made in each turn
$firstchoice; //stores index of first card selected
$secondchoice; //stores index of second card selected
$match = 0; //counts matches made

$faces=[];
    $faces[0] = 'flower.png';
    $faces[1] = 'flower2.png';
    $faces[2] = 'flower3.png';
    $faces[3] = 'flowers4.png';
    $faces[4] = 'flowers5.png';
    $faces[5] = 'flowers6.png';
    
    function $choose(card){
        if (clicks == 2) {
                return;
        }
        if (clicks == 0) {
            firstchoice = card;
            document.images[card].src = faces[card];
            clicks = 1;
        } else {
            clicks = 2;
            secondchoice = card;
            document.images[card].src = faces[card];
            timer = setInterval("check()", 1000);
        }
    }
*/
?>