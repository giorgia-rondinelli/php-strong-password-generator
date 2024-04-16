<?php 
$length= $_GET['length'];

function randomPassword ($length){
  $charachters=['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z','!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=','1','2','3','4','5','6','7','8','9','0'];
  $random_keys=array_rand($charachters,$length);

  for($i=0; $i<=$length; $i++){
    echo $charachters[$random_keys[$i]];
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="index.php" method="get">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">lunghezza password:</label>
        <input type="number" class="form-control" id="" name="length">
        
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div>password generata: <?php if(isset($length)){
  randomPassword($length);
  
}
 ?></div>
</div>

  
</body>
</html>