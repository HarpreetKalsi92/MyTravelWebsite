 function checkForm(form)
     {
                         // validation fails if the input is blank in first name
     if(form.AgtFirstName.value == "") 
	 {
      alert("Enter Agent Name please");
      form.AgtFirstName.focus();
      return false;
    }
                               // validation fails if the input is blank in last name
     if(form.AgtMiddleInitial.value == "") 
	 {
      alert(" Enter MiddleInitial please ");
      form.AgtMiddleInitial.focus();
      return false;
    }
	
	                                 // validation fails if the input is blank in password
     if(form.AgtLastName.value == "") 
	 {
      alert("Enter lastName please");
      form.AgtLastName.focus();
      return false;
    }
	 
	                                 // validation fails if the input is blank in email
	if(form.AgtBusPhone == "") {
      alert("Enter BusPhone Please");
      form.AgtBusPhone.focus();
      return false;
    }

    
	// validation fails if the input is blank in phone no
	if(form.AgtEmail.value == "") {
      alert("Enter Valid Email please");
      form.AgtEmail.focus();
      return false;
    }

    
	if(form.AgtPosition.value == "") {
      alert("Enter Position please");
      form.AgtPosition.focus();
      return false;
    }

  if(form.AgencyId.value == "") {
      alert("Enter AgencyId please");
      form.AgencyId.focus();
      return false;

    }
  
  
	if (confirm("Submit Form?"))
    return true
  else
    return false
	 
    }

    
	
	function clearData()
	 {
     return confirm("Are you sure you want to clear your data?");
   }
	 
	 
  function AgtFirstName1(visibility) {
    var AgtFirstNameTip =document.getElementById("AgtFirstName1");
    if (visibility == true)
      AgtFirstNameTip.innerHTML = "Add FirstName eg:Harpreet";
    else
      AgtFirstNameTip.innerHTML = "";

    
    }

  function AgtMiddleInitial2(visibility) {
    var AgtMiddleInitialTip = document.getElementById("AgtMiddleInitial2");
    if (visibility == true)
        AgtMiddleInitialTip.innerHTML = "Add middleInitial eg:k  ";
    else
       AgtMiddleInitialTip.innerHTML = "";
    
    }
  function AgtLastName3(visibility) {
    var AgtLastNameTip = document.getElementById("AgtLastName3");
    if (visibility == true)
      AgtLastNameTip.innerHTML = "Add last name eg: kalsi";
    else
      AgtLastNameTip.innerHTML = "";  
     }

  function AgtBusPhone4(visibility) {
    var AgtBusPhoneTip = document.getElementById("AgtBusPhone4");

    if (visibility == true)
    AgtBusPhoneTip.innerHTML = "Add number eg: 123-456-7890";
    else
    AgtBusPhoneTip.innerHTML = "";  
  }

  function AgtEmail5(visibility) {
    var AgtEmailTip = document.getElementById("AgtEmail5");
    if (visibility == true)
    
    AgtEmailTip.innerHTML = "Add Email eg: hkalsi@tripadvisrer.com";
    else
    AgtEmailTip.innerHTML = "";
  }

  function AgtPosition6(visibility) {
    var AgtPositionTip = document.getElementById("AgtPosition6");
    if (visibility == true)
 
    AgtPositionTip.innerHTML = "Add position eg: junior or senior agent";
    else
    AgtPositionTip.innerHTML = "";
  }

  function AgencyId7(visibility) {
    var  AgencyIdTip = document.getElementById("AgencyId7");
    if (visibility == true)
 
    AgencyIdTip.innerHTML = "Add Agencyid eg: 1 or 2";
    else
    AgencyIdTip.innerHTML = "";
 }
  

  
    

	
  