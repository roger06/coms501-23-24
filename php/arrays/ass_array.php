<?php

    $classes = array(
    'french'=>  array('Bob', 'Jo', 'susan', 'other'=>array('one','two')) , 
     'CS'=> array('Claudine', 'Mike', 'Rhea'),
     'lecture days'=>'Mon-fri'   
    
    );

    $myarray = array('one'=>'Syzmon','two'=>'Claudine', 'three'=>'Peter');

    
    foreach($myarray as $key => $row) {
 
          echo $key . ' = ' .$row . '<br>';

    }    



    // echo "The day is "  . $days[6];
    // echo '<pre>';
    // print_r($classes);
    // echo '</pre>';

?>