<?php


     // function AgentInsert($table,$agentData)
      //{

     // $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());
      $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());
    //$fields = array_keys($agentData);

    // build the query
    // $sql = "INSERT INTO ".$table."
    // (`".implode('`,`', $fields)."`)
    // VALUES('".implode("','", $agentData)."')";

     $obj = 'aMemberVar';
     $fname=$obj->getFname();
     $middle=$obj->getMidInitial();
     $lname=$obj->getLname();
     $phone=$obj->getPhone();
     $email=$obj->getEmail();
     $pos=$obj->getpos();
     $agcyid=$obj->getAgcyID();

    $sql = "INSERT INTO agents(AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId)VALUES('$fname', '$middle', '$lname', '$phone', '$email', '$pos', '$agcyid')";

    if (mysqli_query($link, $sql) === TRUE)
    {
       print("Agent inserted");
       echo $sql;
    }
    else
    {
      print("Agent not inserted");
      echo $sql;
   }
    mysqli_close($link);

//}




?>
