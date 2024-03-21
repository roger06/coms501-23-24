<?php

//show errors
 
require_once('conn-inc.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);


foreach ($db->query("select * from actor limit 100") as $row) {
        
    echo htmlentities($row['first_name']). " ".htmlentities($row['last_name']) 
    
    ." <a href='details.php?actor_id=".$row['actor_id']."&first_name=".$row['last_name']."'>show details</a>  <br>";
    
    
}



?>