<?php 
function randomPassword ($length){
  $charachters=['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z','!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=','1','2','3','4','5','6','7','8','9','0'];
  $random_keys=array_rand($charachters,$length);

  for($i=0; $i<=$length; $i++){
    echo $charachters[$random_keys[$i]];
  }

}