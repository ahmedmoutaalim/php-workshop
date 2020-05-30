<?php
$movieName = $_GET["movieName"];
$actorName = $_GET["actorName"];
$movieDate = $_GET["movieDate"];
?>


<html>
   <head>
      <title>ironMan</title>
   </head>
<body>
    
    <h1><strong>information about <?php echo "$movieName"; ?></strong></h1>
    <p><b><?php echo "$actorName"; ?></b>  starred in the movie <b>
    
    
    
    <?php echo "$movieName" ;?></b>which was released in year <b><?php echo  "$movieDate";?></b>
    </p>
</body>
</html>