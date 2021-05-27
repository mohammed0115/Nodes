<?php
include('db-connection.php'); 
$status = "";
if(isset($_POST['new']) && $_POST['new']==1&&$_GET['GetID']){
    $trn_date = date("Y-m-d H:i:s");
    $title =$_REQUEST['title'];
    $Description =$_REQUEST['Description'];
    
    $id=$_GET['GetID'];
    // $submittedby = $_SESSION["username"];
    $ins_query="UPDATE Nodes SET title = '$title',
     Description= '$Description'
    WHERE id = $id
    ";
    $res = $con->query($ins_query);
   
    if($con->error){
    try {   
        throw new Exception("MySQL error $con->error <br> Query:<br> $ins_query", $con->error);   
    } catch(Exception $e ) {
        echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
        echo nl2br($e->getTraceAsString());
    }
    }
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
       <div class="container">
      <div class="raw">
        <div class="col">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Node Book</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="nodes.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_Node.php">add New</a>
      </li>
      
      
      
    </ul>
   
</nav>
<div >
  <br>
  <br>
</div>
<div class="raw">
<div class="col">
    

<div>
<h1>Update Record </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
 <?php  
              $sql_query = "SELECT `id`, `title`, `Description` FROM `Nodes` WHERE
               id=".$_GET['GetID'];
             
              if ($result=mysqli_query($con,$sql_query))
              {
                 while ($currency_list = mysqli_fetch_assoc($result))
                { 
?>
<p><input type="text" name="title" placeholder="Enter title" value="<?php echo $currency_list['title']; ?>" required /></p>

<p><textarea name="Description" id="Description" rows="10" cols="100" value=""><?php echo $currency_list['Description']; ?></textarea></p>

<?php 
}}
?>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>

</div>

    

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>




