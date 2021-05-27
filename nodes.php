
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Node</title>
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

    <?php include('db-connection.php'); 
      $sql_query = "SELECT `id`, `title`, `Description` FROM `Nodes` WHERE 1";
      if ($result=mysqli_query($con,$sql_query))
      {
                 
                
   ?>



    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th>edit</th>
      <th>delet</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($currency_list = mysqli_fetch_assoc($result))
    { 
    ?>
    <tr>
      <td><?php echo $currency_list['id'];?></td>
      <td><?php echo $currency_list['title'];?></td>
      <td><?php echo $currency_list['Description'];?></td>
      <td><a href="edit_node.php?GetID=<?php echo $currency_list['id'] ?>">Edit</a></td>
      <td><a href="delete_node.php?GetID=<?php echo $currency_list['id'] ?>">Delete</a></td>
    </tr>
   <?php
     }}
    ?>

   
  </tbody>
</table>

  </div>
</div>

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




