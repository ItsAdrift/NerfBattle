<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    
    function handleLogin() {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        console_log("$username  | $password");

        $conn = $GLOBALS['conn'];
        $sql = "SELECT id FROM Users WHERE user=$username AND pass=$password";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              console_log($row["id"]);
            }
          } else {
            console_log("No Results");
          }
    }
?>
<html></html>