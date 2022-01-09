  
	
     

		
 
    function checkForm(form)
     {
                         // validation fails if the input is blank in first name
     if(form.firstname.value == "") 
	 {
      alert("Error:Enter your Name please");
      form.firstname.focus();
      return false;
    }
                               // validation fails if the input is blank in last name
     if(form.lastname.value == "") 
	 {
      alert("Error: Input is empty!");
      form.lastname.focus();
      return false;
    }
	
	                                 // validation fails if the input is blank in password
     if(form.password.value == "") 
	 {
      alert("Error: Input is empty!");
      form.password.focus();
      return false;
    }
	 //7 to 15 characters which contain only characters, numeric digits, underscore and first character must be a letter

    var re = /^[A-Za-z]\w{7,16}$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.password.value))
		{	
      alert("Error: incorrect password!");
      form.password .focus();
	   // validation was successful
      return false;
    } 
	                      // validation fails if the input is blank in email
	if(form.emailaddress.value == "") {
      alert("Error: Input is empty!");
      form.emailaddress.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.emailaddress.value)) {
      alert("You have entered an invalid email address!");
      form.emailaddress .focus();
	   // validation was successful
      return false;
    }
	// validation fails if the input is blank in phone no
	if(form.phoneno.value == "") {
      alert("Error: you must fill the phonenumber");
      form.phoneno.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re =/^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.phoneno.value)) {
      alert("invalid phone number!");
      form.phoneno .focus();
	   // validation was successful
      return false;
    }
	if(form.postalcode.value == "") {
      alert("Error: Input is empty!");
      form.postalcode.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.postalcode.value)) {
      alert("Error: invalid postalcode!");
      form.postalcode.focus();
	   // validation was successful
      return false;
	  
    }
	
	
	 
    }
	
	function clearData()
	 {
     return confirm("Are you sure you want to clear your data?");
     }
	 
	 
	function FNameTip() {
    var FirstNameTip = document.getElementById("FNameTip");
	FirstNameTip.innerHTML = "Add your first name";
    
    }
    function lNameTip() {
    var lastNameTip = document.getElementById("lNameTip");

      lastNameTip.innerHTML = "Add your last name";
    
    }
  function PasswordTip() {
    var PasswordTip = document.getElementById("PasswordTip");

   
      PasswordTip.innerHTML = "Add your password";
    
  }

  function EmailTip() {
    var EmailTip = document.getElementById("EmailTip");

   
      EmailTip.innerHTML = "Add your Email";
    
  }

  function PhoneNoTip() {
    var PhoneNoTip = document.getElementById("PhoneNoTip");

    
      PhoneNoTip.innerHTML = "Add your phone number";
    
  }

  function PostalCodeTip() {
    var PostalCodeTip = document.getElementById("PostalCodeTip");

 
      PostalCodeTip.innerHTML = "Add your PostalCode";
    }
  
    

	
  