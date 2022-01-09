<!DOCTYPE html>
<html>

	<head>

		<title>Register</title>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<script type="text/javascript"  src="javascript/Agent.js">
		</script>
		</head>
		
    <body>
                 <!--navigation part-->

        <?php
            include("menu.php");     
        ?>

        <?php
            include("header.php");
        ?>

                                                              <!--Register Title-->
	    <div class="header1" > 
            <h1 style="color:white"align="center"class="a">Add An Agent</h1> 

        </div>
       
	

	                                                           <!--form specified here-->  
	    <form  method="POST" action="AgentData.php" >
	                                                        <!--table start from here-->
        <table width="200" align="center"  >
	
		
            <tr style="text align:center">
                 <td style=" color:purple;" align="center;">AgtFirstName</td>
                <td><input style="text-align:left" required  type="text" name="AgtFirstName" size="30" maxlength="10" onfocus="AgtFirstName1(true)" onblur="AgtFirstName1(false)">
                 <span id="AgtFirstName1"></span>
			     </td>
	        </tr>
		    <tr>
                <td style=" color:purple;" align="center;" >AgtMiddleInitial</td>
                <td><input style="text-align:left" required type="text" name="AgtMiddleInitial" size="30" maxlength="1"onfocus="AgtMiddleInitial2(true)" onblur="AgtMiddleInitial2(false)">
			    <span id="AgtMiddleInitial2"></span>
			   </td>
			
            </tr>
            <tr>
               <td style=" color:purple;"align="center;" >AgtLastName</td>
               <td><input  style="text-align:left" required  type="text" name="AgtLastName" size="30"onfocus="AgtLastName3(true)" onblur="AgtLastName3(false)">
			   <span id="AgtLastName3"></span>
                </td>
	        <tr>
                <td style=" color:purple;"align="center;" >AgtBusPhone</td>
                <td><input style="text-align:left" required type="text" name="AgtBusPhone" size="30" maxlength="20"onfocus="AgtBusPhone4(true)" onblur="AgtBusPhone4(false)">
			    <span id="AgtBusPhone4"></span>
			    </td>
            </tr>
	        <tr>
                <td  style=" color:purple;"align="center;" >AgtEmail</td>
                <td><input style="text-align:left" required type="text" name="AgtEmail" size="30" maxlength="30"onfocus="AgtEmail5(true)"onblur="AgtEmail5(false)">
			    <span id="AgtEmail5"></span>
			    </td>
            </tr>
	        <tr>
                <td style=" color:purple;" align="center;">Agtposition</td>
                <td><input required type ="text" name = "AgtPosition"size="30" maxlength="6"onfocus="AgtPosition6(true)" onblur="AgtPosition6(false)">
			    <span id="AgtPosition6"></span>
			    </td>
            </tr>
            <tr style="text align:center">
                <td style=" color:purple;" align="center;">AgencyId</td>
                <td><input style="text-align:left"  required type="text" name="AgencyId" size="30" maxlength="10" onfocus="AgencyId7(true)"onblur="AgencyId7(false)">
                <span id="AgencyId7"></span>
                </td>
            </tr>
	        <tr>
                <td align="center;"><input type="submit" value="submit" onclick="return checkForm(form);"/></td>
	            <td><input type="reset" value="reset" onclick="clearData();"/></td>
	        </tr>

            </table>
       </form>
                                                      <!--footer-->
                <?php
                include("footer.php");
                 ?>
    </body>

</html>