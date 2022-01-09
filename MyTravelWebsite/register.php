<!DOCTYPE html>
<html>

	<head>

		<title>Register</title>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<script type="text/javascript"  src="javascript/register.js">
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
						<h1> Register Your Trip </h1>
      </div>
	                                                           <!--form specified here-->
	    <form  method="POST" action="register.php" >                                             
						<table width="200" align="center"  > <!--table start from here-->
            <tr style="text align:center">
            <td style=" color:purple;" align="center;">First Name</td>
		        <td><input style="text-align:left"  required type="text" name="firstname" size="30" maxlength="10" onfocus="FNameTip()">
                 <span id="FNameTip"></span>
			     </td>
	        </tr>
		    <tr>
            <td style=" color:purple;" align="center;" >Last Name</td>
            <td><input style="text-align:left" required type="text" name="lastname" size="30" maxlength="10"onfocus="lNameTip()">
			    <span id="lNameTip"></span>
			   </td>
        </tr>
            <tr>
               <td style=" color:purple;"align="center;" >Password</td>
               <td><input  style="text-align:left" required type="password" name="password" size="30"onfocus="PasswordTip()"/>
			         <span id="PasswordTip"></span>
                </td>
	        <tr>
                <td style=" color:purple;"align="center;" >Email</td>
                <td><input style="text-align:left" required type="text" name="emailaddress" size="30" maxlength="20"onfocus="EmailTip()">
			    <span id="EmailTip"></span>
			    </td>
            </tr>
	        <tr>
                <td  style=" color:purple;"align="center;" >Phone No.</td>
                 <td><input style="text-align:left" required type="text" name="phoneno" size="30" maxlength="15"onfocus="PhoneNoTip()">
			     <span id="PhoneNoTip"></span>
			     </td>
            </tr>
	        <tr>
                <td style=" color:purple;" align="center;">Postal Code</td>
                <td><input required type ="text" name = "postalcode"size="30" maxlength="6"onfocus="PostalCodeTip()"/>
			    <span id="PostalCodeTip"></span>
			    </td>
            </tr>
             <tr>
                <td style=" color:purple;"align="center;" >Country</td>
                 <td >
                <select name = "Country">
                <option value = "-1" selected ></option>
                <option value = "1">USA</option>
                <option value = "2">UK</option>
                <option value = "3">INDIA</option>
				        <option value = "4">CANADA</option>
                </select>
                </td>
            </tr>
    	    <tr>
                <td style=" color:purple;" align="center;">Description</td>
		    </tr>
            <tr>
                <td><textarea rows="17" cols="17"style=" background-color:lightblue;"align="center">your feedback is appreciated</textarea>
                </td>
            </tr>
	        <tr>
              <td align="center;"><input type="submit" value="register" onclick="checkForm(form);"/></td>
	            <td><input type="reset" value="reset" onclick="clearData();"/></td>
	        </tr>
         </table>
         </form>
         <p align="center"><a href="index.php">Go Back</a></p>
		                                                      <!--footer-->
         <?php
            include("footer.php");
        ?>
    </body>

</html>
