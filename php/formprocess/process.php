<?php
 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    if (isset($_POST['firstname'] )) $firstname =  $_POST['firstname'];
    if (isset($_POST['lastname'] )) $lastname =  $_POST['lastname'];


 

?>


<p>Your first name is <?php echo $firstname   ;?>  </p>
<p>Your last name is <?php echo $lastname;?>  </p>