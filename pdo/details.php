<h1>Details </h1>
<?php

//show errors
 
require_once('conn-inc.php');  // incluce connection file
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['actor_id'])) {

    $actor_id = $_GET['actor_id'];
}

else {

    echo "<p>You silly billy!</p>";
    die();
}

echo $actor_id . '<br>' ;
$sql = "SELECT * FROM actor WHERE  actor_id= " . $actor_id;

// echo $sql;

$stmt = $db->query($sql);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);


// foreach ($db->query("select * from actor limit 100") as $row) {
        
//     echo htmlentities($row['first_name']). " ".htmlentities($row['last_name']) 
    
//     ." <a href='details.php?actor_id=".$row['actor_id']."&first_name=".$row['last_name']."'>show details</a>  <br>";
    
    
// }



?>