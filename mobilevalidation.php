<?php

if (isset($_POST['Validation'])) 
{
   
    $mobile = $_POST['mobile'];

    
    $pattern =  '/^\d{10}$/';

    
    if (preg_match($pattern, $mobile)) {
        echo "<h3>Mobile Number is valid: $mobile</h3>";
    } 
    else 
    {
        echo "<h3>Invalid Mobile Number. Please enter a valid 10-digit number.</h3>";
    }
}
?>
