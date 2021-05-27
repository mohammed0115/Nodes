
<?php
include('db-connection.php'); 
if (isset($_GET['GetID'])) {
  $id = $_GET['GetID'];
  $ins_query="DELETE FROM Nodes WHERE id=$id";
  $res = $con->query($ins_query);
   
    if($con->error){
    try {   
        throw new Exception("MySQL error $con->error <br> Query:<br> $ins_query", $con->error);   
    } catch(Exception $e ) {
        echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
        echo nl2br($e->getTraceAsString());
    }
    }
  
  $_SESSION['message'] = "Address deleted!"; 
  header('location: nodes.php');
}

?>