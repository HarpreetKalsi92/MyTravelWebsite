 function checkForm(form)
  {
                                  // validation fails if the input is blank in first name
    if(form.firstname.value == "") {
      alert("Error: Input is empty!");
      form.firstname.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.firstname.value)) {
      alert("Error: Input contains invalid characters!");
      form.firstname .focus();
	   // validation was successful
      return false;
    }
	
                                     // validation fails if the input is blank in last name
     if(form.lastname.value == "") 
	 {
      alert("Error: Input is empty!");
      form.lastname.focus();
      return false;
    }
	// regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.lastname.value))
		{	
      alert("Error: Input contains invalid characters!");
      form.lastname .focus();
	   // validation was successful
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
      alert("Error: Input contains invalid characters!");
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
	                       // validation fails if the input is blank in phone no.
	if(form.phone No.value == "") {
      alert("Error: Input is empty!");
      form.phone No.focus();
      return false;
    }
	                         // regular expression to match only alphanumeric characters and spaces
    var re = /^\d{10}$/;

                             // validation fails if the input doesn't match our regular expression
    if(!re.test(form.phone No.value)) {
      alert("Error: Input contains invalid characters!");
      form.phone No.focus();
	   // validation was successful
      return false;
    }













 }
  