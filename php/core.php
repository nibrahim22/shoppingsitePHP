<?php
    
    ob_start();
    session_start();
    $current_file = $_SERVER['SCRIPT_NAME'];
    include 'database.php';
    
    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        $http_referer = $_SERVER['HTTP_REFERER'];
    }
    
    
    
    
    function Logged_in() {
        
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
        
    }
    
     //Implementation of mysql_result
    function getResult($res,$row=0,$col=0){ 
        $numrows = mysqli_num_rows($res); 
        if ($numrows && $row <= ($numrows-1) && $row >=0){
            mysqli_data_seek($res,$row);
            $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
            if (isset($resrow[$col])){
                return $resrow[$col];
            }
        }
        return false;
    }
    
    function getuserfield($field) {
        global $connection;
        //Grabs the corresponding data from the field specified in the table
        $query = "SELECT $field FROM user WHERE id='".$_SESSION['user_id']."'";
        $query_run = mysqli_query($connection, $query);
        $query_result = mysqli_fetch_array($query_run);
        //$fieldval = $query_result[$field];
        $fieldval = $query_result[0];
        if(!empty($fieldval))
        {
            
            return $fieldval;
        }
        else{
            
            echo "THERE IS PROBLEM BUDDY!!";
            echo "session id is: ". $_SESSION['user_id'];
        }

    }
    
   

?>