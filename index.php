<?php require("validation.php"); ?>

<!DOCTYPE HTML>
<html>
   <head>
     <title>Praktikum5</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
	 </head>
   <body>
   	<pre><?php print_r($_POST); ?></pre>
   		<form action="index.php" method="post">
   			<div class="formfield">	
               <?php 
                  if ($isSubmitted){
                     echo $usernameMessage;
                  }
               ?>
   				<span>Kasutajanimi: </span><input type="text" name="username">
   			</div>
   			<div class="formfield">
   				<input type="submit" name="submit" value="Saada">
   			</div>
         </form>
   </body>

</html>