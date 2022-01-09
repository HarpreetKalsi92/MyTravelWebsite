 
 <html>  
     <head><title>Table</title>
	       <link rel="stylesheet" type="text/css" href="css/links.css">
           <?php
            include("variablesPage.php");
            ?>
	</head>

        <body>
	                                     <!--navigation part-->
                    <?php
                    include("menu.php");     
                     ?>
                                          <!--header-->
                    
                   
	                 <div class="header" style="padding-bottom: 47px;"> 
                     <h1 style="color:white"align="center"class="a">Links </h1> 
                     </div>

                    <table border="5" height= "400" width= "400" align="center" style="font-size:30px"class="table">
                    <?php 
                    
                     $i = 1;
                     //foreach($TravelSites as $varsite){// $travelsites is Array Name  &  $varsite is a variable
                     foreach($TravelSites as $key => $value){
                     echo "<tr>";
                    // echo "<td>" .$i++. "</td>";
                    echo "<td>" .$key. "</td>";
                    //echo "<td><a href=\"http://$varsite\">$varsite</a><br/>"."</td>";
                    echo "<td><a href=".$value.">" .$value."</a><br/> </td>";
                    echo "</tr>";
                      }
                     echo '</table>'; 
		 
                     ?>
                     <?php
                     include("footer.php");
                     ?>         
                  		
        </body>
</html>		
