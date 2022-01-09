

  // on mouseclick event for conformation prompt//
  
    function login1() {
       if (confirm("do you want to submit the form?"))
		  document.getElementById("regFrm").submit();
	   else return;
	                 }
		
	 //reset form code// 
		 
    function reset1(){
		if(!confirm("are you sure you want to reset all text?"))
			return;
		else document.getElementById("regFrm").reset();
		}
		 
		
		