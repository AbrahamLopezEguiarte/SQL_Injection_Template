<?php
    //Database and localhost info
    $user = "root";
    //Empty string in case you don't have a password for localhost
    $pass = "";
    $server = "localhost";
    //Database you will connect to
    $db = "";
    $con = new mysqli($server, $user, $pass, $db);

    //Retrieves information for login
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $query = "select * from login where username = '".$username."' and pass = '".$pass."'";
    if ($con -> multi_query($query)) {
      do{
        // Store first result set
        if ($result = $con -> store_result()){
          while ($row = $result -> fetch_row()){
            //printf("Hello %s with pass %s\r\n", $row[0], $row[1]);
            echo nl2br("Hello ".$row[0]." with pass ".$row[1]."\n");
          }
          $result -> free_result();
        }
        // if there are more result-sets, then print a divider
        if ($con -> more_results()){
          echo nl2br("-------------\n");
        }
        //Prepare next result set
      }while ($con -> next_result());
    }
      
    $con -> close();
?>