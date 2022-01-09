
<html>
    <head>
        <title>index</title>
		    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
		     <!-- How about CSS file toreset the styles to default values -->
            <link rel="stylesheet" type="text/css" href="css/index.css">

	        <script>

			    var arrImages = new Array();
			    var arrDescs = new Array();
			    var arrStyle = new Array();
			    var TravelUrl = new Array();
			    //var arrElement = new Array();

			     /* Load the image files and descriptions that will appear in the table on the main
			     page.  Don't bother using a loop here, since the image files names and descriptions
			     must be entered individually.  */
			     function loadImages() {

				 arrImages[0] = new Image();
				// arrImages[0].src = "../Travel/falls.jpg";
         arrImages[0].src = "./images/falls.jpg";

				 arrImages[1] = new Image();
				 arrImages[1].src = "./images/beach.jpg";

				 arrImages[2] = new Image();
				 arrImages[2].src = "./images/disney.jpg";

				 arrImages[3] = new Image();
				 arrImages[3].src = "./images/boating.jpg";

				 arrDescs[0] = "Niagara Falls Canada";
				 arrDescs[1] = "Beach";
				 arrDescs[2] = "Disneyland California";
				 arrDescs[3] = "Boating";

				 arrStyle[0] = "txtBold";
				 arrStyle[1] = "txtBold";
				 arrStyle[2] = "txtBold";
				 arrStyle[3] = "txtBold";

				 // arrElement[0] = {"name": "Niagara Falls Canada", "style": "txtBold"};
				 // arrElement[1] = {"name": "Beach", "style": "txtItal"};

				 TravelUrl[0] = "http://www.niagarafalls.ca";
			   TravelUrl[1] = "http://www.tripsavvy.com";
				 TravelUrl[2] = "http://www.disneyland.com/";
				 TravelUrl[3] = "https://www.myswitzerland.com/en/";

				  }

			     function displayPhotoTable() {
	             // First load the images and their descriptions into the arrays
			     loadImages();
			     tablediv = document.getElementById("DescTable");
			    // Create the table and header row
		       var tbl = document.createElement("table");
			     var thdr = document.createElement("th");
			     var thdr_txt = document.createTextNode("Mouse over to see photos!");
		       thdr.appendChild(thdr_txt);
			     tbl.appendChild(thdr);

			     /* Create each row of the table, and append child element to their parent. */
			     for (var i = 0; i < arrDescs.length; i++) {

			     // Create a new row
			     var trow = document.createElement("tr");

			     // Create a new cell
			     var tdata = document.createElement("td");
			     //tdata.innerHTML = "<p class='cell' onmouseover='mouseoverDispImage(" + i + ")' >"  + arrDescs[i] + "</p>";
			     tdata.innerHTML = "<p class='cell " + arrStyle[i] + "' onmouseover='mouseoverDispImage(" + i + ")' >"  + arrDescs[i] + "</p>";
			   	// tdata.innerHTML = "<p class='cell " + arrElement[i].style + "' onmouseover='mouseoverDispImage(" + i + ")' >"  + arrElement[i].name +."</p>";
			     tbl.appendChild(trow);
			     trow.appendChild(tdata);
			       }
			     tablediv.appendChild(tbl);
			       }
			                              /*mouseover function*/

			     function mouseoverDispImage(i) {
		       var phDiv = document.getElementById("DivImages");
		       var x = document.getElementById("myImg");
               x.setAttribute("src", arrImages[i].src);
               x.setAttribute("height", "250px");
               x.onclick= function() {imageurls(i)};
		          }
                                          /*travel urls window open function*/
		         var mywindow;
                 function imageurls(i){
		         var windowloc = TravelUrl[i];
			       mywindow = window.open(TravelUrl[i], "", "width=500,height=500");
		         setTimeout(function(){mywindow.close();},10000);
			       }
		         function mouseoutimage() {
			       var y = document.getElementById("DivImages");
			       y.innerHTML="";
		         if(y.style.display == "block")
		         y.style.display = "none" ;

                  }

   </script>
   </head>
    <body onload="displayPhotoTable()" >

	                         <!--navigation part--->
    <?php
            include("menu.php");
     ?>
	                                                 <!-- header part-->
    <?php
            include("header.php");

     ?>
         <div class="greetings">
         	<?php
         function myGreeting()
        	  {
            date_default_timezone_set('America/Edmonton');
            $h = date('G'); // current hour (0-23)
            $greeting = "Good Morning";
            if($h < 17)
            { $greeting = "Good Afternoon"; }
            if($h < 12)
            { $greeting = "Good evening"; }
             return $greeting;
            }
            echo myGreeting();
            ?>
         </div>
                                    <!--description and images div styling  -->
	       <div class="photobox">
                                      <!--div for display photos and table of descriptions -->
           <div id="DescTable" style="float: left; display:inline;">
		       <h2 style="color:blue" >Some of our destinations...</h2>
		       <br>
        </div>
	      <div id="DivImages" style="display:inline;">
	       	<img id="myImg">
	      </div>
	     </div>
	                                       <!--all images-->

       <img  src="images/Taj.jpg"  style= "width:25%;height:200px;" align="left"/>
	     <img src="images/golden.jpg" style="width:24%;height:200px" align="center"/>
       <img src="images/redford.jpg" style="width:25%;height:200px" align="center"/>
       <img src="images/dubai.jpg" style="width:25%;height:200px" align="left"/>
       <a href ="register.php"><img src="images/register2.jpg" style="width:25%;height:200px" align="left"></a>
       <a href = "contact.php"><img src="images/contact1.jpg" style="width:25%;height:200px" align="right"></a>

	                                               <!--footer-->
	    <?php
            include("footer.php");
        ?>


    </body>

</html>
