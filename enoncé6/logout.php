


<html lang = "en">
   
   <head>
      <link rel="stylesheet" href="user.css">
      
   </head>
	
   <body>
      
      <h2 class="title">Enter Username and Password</h2> 
     
      <?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
  
   // header('Refresh:15 ; URL = login.php');
?>
         <?php
            $msg = '';
            
            if (isset($_POST['valider']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'moutaalim' && 
                  $_POST['password'] == '0653090961') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'OMAR';
                  
                  $msg =  'Welcome';
               }else {
                  $msg = 'Wrong username or password';
               }
            }  
         ?>
 
      
            <h4><?php echo $msg; ?></h4>
         <form action = "logout.php" method = "post">
            <input type = "text"name = "username" placeholder = "moutaalim" ></br>
            <input type = "password" name = "password" placeholder = "nom tele m" ><br>
            <input class type = "submit"  name = "valider">
         </form>
			
         <div class="click">Click here to clean <a href ="logout.php" tite = "Logout">Session.</a></div> 

      
   </body>
</html>
