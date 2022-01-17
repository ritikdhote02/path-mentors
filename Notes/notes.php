<!doctype html>
<html lang="en">
  <head>
  <title> Your-Notes</title>
  <link href="fav.jpg" rel="icon">
      <link rel="stylesheet" href="notes.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    
  </head>
  <body>
  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-success">𝓨𝓸𝓾𝓻-𝓝𝓸𝓽𝓮𝓼</a>
      <form class="d-flex">
          
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> &nbsp;
        <a href="../login/welcome.php" class="btn btn-outline-success">Profile</a>
      </form>
    </div>
  </nav>
  
      <div class="container my-4 w-50 m-auto">
       
        <form action="data.php" method="POST" autocomplete="off">
            <div class="form-group">
                <input type="text" name="title" class="form-control" id="" required placeholder="Title">
            </div><br>
            <div class="form-group">
                <textarea name="description" id="" cols="30" rows="5" required class="form-control" placeholder="Description"></textarea>
            </div><br>
            <button class="btn btn-success">Add To Note</button>
        </form>
        <br>
        <hr>
        <h1>Your Notes</h1><br>
        <div class="notes-container">
            <?php
                include 'database.php';
                $sql="SELECT * FROM notes";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) >0){

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $title=$row['Title'];
                        $description=$row['Description'];
                        ?>
                        <div class="note-div">
                            <div class="title"><?php echo $title; ?></div>
                            <div class="description"><?php echo $description; ?></div>
                            <div class="button">
                                <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    
                
               
    // <?php
        }
         else{
            echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">No Data Found In Database</div>
          ';
        }
        ?>
            <!-- ?> -->
        </div>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>