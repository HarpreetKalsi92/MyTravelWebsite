<html>
<head><title>login page</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>	
<body>
	
	<?php
        include("menu.php");      
    ?>

    <?php
        include("header.php");
     ?>
<div class="header1" > 
    <h1 style="color:white"align="center"class="a">Login Agent </h1> 
</div>     
<form action = "loginfunction.php" method = "post" >
    <table align="center"class = "logTable">
         <tr>
         <td>Email</td>
         <td><input type="text" id="useremail"  name="useremail" onblur="userEmail()" maxlength="40"/>
         </td>
         </tr>
         <tr>
 	     <td>Password</td>
 	     <td><input type="password" id="password"  name="password" onblur="loginPassword()" maxlength="40"/>
 	     </td>
         </tr>
         <tr>
         <td><input type="submit" name ="login" value ="login"/></td>
         <td><input  type="reset"  name = "reset" value="reset"/></td>
         </tr>
     </table>
     </form>
     <?php
     include("footer.php");
      ?>
		
</body>

</html>

 	





















 </form>