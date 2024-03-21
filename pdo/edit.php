<h1>Edit actor </h1>
<?php

//show errors
 
require_once('conn-inc.php');  // incluce connection file
error_reporting(E_ALL);
ini_set('display_errors', 1);

// if posted run update query
if (isset($_POST['actor_id'])) {

    $sql = "UPDATE actor SET first_name = '".$_POST['first_name']."' WHERE actor_id = " . $_POST['actor_id'] ;
    $db->query($sql);
    //echo $sql;    
}


if (isset($_GET['actor_id']) OR isset($_POST['actor_id'])  ) {
    $actor_id = $_REQUEST['actor_id'];
}

else {
    echo "<p>You silly billy!</p>";
    die();
}

echo $actor_id . '<br>' ;
$sql = "SELECT * FROM actor WHERE  actor_id= " . $actor_id;

echo $sql;

$stmt = $db->query($sql);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>First name:
<input type="text" name="first_name" value="<?php echo $row['first_name'];?>">
</p>
<p>Last name:
<input type="text" name="last_name" value="<?php echo $row['last_name'];?>">
</p>
<p>
<input type="hidden"  name="actor_id" value="<?php echo $row['actor_id'];?>">
<input type="submit" value="Update">
</p>
</form>