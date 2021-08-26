<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!empty($_POST["cat_id"]))
{ 
    // Fetch state data based on the specific country 

    $cat_id = $_POST['cat_id'];    // ".$_POST['cont_id']."
    $query = $con->query("SELECT * FROM tbl_state WHERE Category_Id='$cat_id'") or die($con->error());
    // $query = "SELECT * FROM tbl_state WHERE cont_id='$cont_id' ORDER BY state_name ASC"; 
     
     
    // Generate HTML of state options list 
    if( mysqli_num_rows($query) > 0 )
    { 
        echo '<option  value disabled selected >Select State</option>'; 
        while($row = mysqli_fetch_array($query) )
        {  
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>'; 
        } 
    }
    else
    { 
        echo '<option value="">State not available</option>'; 
    } 
}